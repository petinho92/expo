<script>
    import { getComparator, formatDate } from "./helpers.js";
    import Button from "./Button.svelte";
    import {writable} from "svelte/store";
    export let columns = [];
    export let data = writable([]);
    let sortColumn = null;
    let sortDirection = null;
    function sortBy(column) {
        const sameColumn = column === sortColumn;
        const currentlyAscending = sortDirection === "ASC";
        const unsetSort = sameColumn && !currentlyAscending;
        sortColumn = unsetSort ? null : column;
        sortDirection = unsetSort
            ? null
            : sameColumn && currentlyAscending
                ? "DESC"
                : "ASC";
    }
    function sortData() {
        let items = [...data];
        if (!data.length) return data;
        const type = typeof data[0][sortColumn.toLowerCase()];
        items.sort(getComparator(type, sortColumn));
        return sortDirection === "ASC" ? items : items.reverse();
    }
    $: display = sortColumn && sortDirection ? sortData() : [...data];
</script>

<div class="container">
    <table>
        <thead>
        <tr>
            {#each columns as column}
                <th>
                    <Button {sortBy} {column} {sortColumn} {sortDirection} />
                </th>
            {/each}
        </tr>
        </thead>
        <tbody>
        {#each display as row}
            <tr>
                <!--                <td class="id"><strong><em>#{row.id}</em></strong></td>-->
<!--                <td class="name"><div class="flex"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 16 3 C 8.832031 3 3 8.832031 3 16 C 3 23.167969 8.832031 29 16 29 C 23.167969 29 29 23.167969 29 16 C 29 8.832031 23.167969 3 16 3 Z M 16 5 C 22.085938 5 27 9.914063 27 16 C 27 22.085938 22.085938 27 16 27 C 9.914063 27 5 22.085938 5 16 C 5 9.914063 9.914063 5 16 5 Z M 16 8 C 13.25 8 11 10.25 11 13 C 11 14.515625 11.707031 15.863281 12.78125 16.78125 C 10.53125 17.949219 9 20.300781 9 23 L 11 23 C 11 20.226563 13.226563 18 16 18 C 18.773438 18 21 20.226563 21 23 L 23 23 C 23 20.300781 21.46875 17.949219 19.21875 16.78125 C 20.292969 15.863281 21 14.515625 21 13 C 21 10.25 18.75 8 16 8 Z M 16 10 C 17.667969 10 19 11.332031 19 13 C 19 14.667969 17.667969 16 16 16 C 14.332031 16 13 14.667969 13 13 C 13 11.332031 14.332031 10 16 10 Z"/></svg><strong>{row.name}</strong></div></td>-->
                <td class="name">{row.name}</td>
                <td class="email">{row.neptun}</td>
                <td class="qrcode">{row.qrcode}</td>
            </tr>
        {/each}
        </tbody>
    </table>
</div>


<style>
    /*
Generic Styling, for Desktops/Laptops
*/
    table {
        width: 100%;
        border-collapse: collapse;
    }

    td{
        color: black;
    }

    tr:nth-last-of-type(2n){
        background: #ade8ff;
    }
    /* Zebra striping */
    tr:nth-of-type(2n+1) {
        background: #fcedab;
    }
    th {
        background: #a7a7a9;
        font-weight: bold;
    }
    td, th {
        padding: 6px;
        border: 1px solid #ccc;
        text-align: left;
    }
    /*
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
    @media
    only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px)  {

        /* Force table to not be like tables anymore */
        table, thead, tbody, th, td, tr {
            display: block;
        }

        /* Hide table headers (but not display: none;, for accessibility) */
        thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        tr { border: 1px solid #ccc; }

        td {
            /* Behave  like a "row" */
            border: none;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-left: 50%;
            line-break: anywhere;
        }

        td:before {
            /* Now like a table header */
            position: absolute;
            /* Top/left values mimic padding */
            top: 6px;
            left: 6px;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
        }

        /*
        Label the data
        */
        td:nth-of-type(1):before { content: "Név"; font-weight: bold;}
        td:nth-of-type(2):before { content: "Neptun/EHA"; font-weight: bold;}
        td:nth-of-type(3):before { content: "QR"; font-weight: bold;}
    }
</style>

<!--<style>-->
<!--    table {-->
<!--        width: 100%;-->
<!--        min-width: 900px;-->
<!--        border-spacing: 0;-->
<!--        position: relative;-->
<!--        overflow: auto;-->
<!--        color: black;-->
<!--        margin-bottom: 0.5rem;-->
<!--        box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.05);-->
<!--    }-->
<!--    th {-->
<!--        padding: 1.5rem 1.25rem;-->
<!--        background-color: #ffffff;-->
<!--        border-bottom: 1px solid #f0f2fa;-->
<!--        position: sticky;-->
<!--        top: 0;-->
<!--    }-->
<!--    th:first-child {-->
<!--        left: 0;-->
<!--        z-index: 1;-->
<!--        border-right: 1px solid #f0f2fa;-->
<!--    }-->
<!--    td {-->
<!--        margin: 0;-->
<!--        padding: 1.25rem;-->
<!--        vertical-align: top;-->
<!--        text-align: inherit;-->
<!--        font-size: 0.9rem;-->
<!--        max-width: 20%;-->
<!--        background-color: #ffffff;-->
<!--    }-->
<!--    td:first-child {-->
<!--        position: sticky;-->
<!--        left: 0;-->
<!--        top: auto;-->
<!--        width: 6rem;-->
<!--        border-right: 1px solid #f0f2fa;-->
<!--    }-->
<!--    tbody tr:nth-child(odd) td {-->
<!--        background-color: #a0b0ef;-->
<!--    }-->
<!--    thead th:first-child {-->
<!--        border-top-left-radius: 5px;-->
<!--    }-->
<!--    thead th:last-child {-->
<!--        border-top-right-radius: 5px;-->
<!--    }-->
<!--    tbody tr:last-child td:first-child {-->
<!--        border-bottom-left-radius: 5px;-->
<!--    }-->
<!--    tbody tr:last-child td:last-child {-->
<!--        border-bottom-right-radius: 5px;-->
<!--    }-->
<!--    svg {-->
<!--        width: 1.25rem;-->
<!--        height: 1.25rem;-->
<!--        margin-right: 0.25rem;-->
<!--        fill: rgba(0, 0, 0, 0.5);-->
<!--        flex-shrink: 0;-->
<!--    }-->
<!--    .flex {-->
<!--        display: flex;-->
<!--        align-items: center;-->
<!--    }-->
<!--    strong{-->
<!--        color: black;-->
<!--    }-->
<!--</style>-->