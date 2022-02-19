<script>
    import {Datatable} from 'svelte-simple-datatables';
    import {onMount} from "svelte";
    import "../applications/css/datatable.dark.css";

    let rows;
    let users = [];
    const settings = {
        sortable: true,
        pagination: true,
        scrollY: true,
        scrollX: true,
        rowPerPage: 50,
        columnFilter: false,
        css: false,
        labels: {
            search: "Search...", // search input placeholer
            filter: "Filter", // filter inputs placeholder
            previous: "<",
            next: ">"
        },
        blocks: {
            searchInput: true,
            paginationButtons: true,
            paginationRowCount: true
        }
    }

    onMount(async () => {
        const resp = await fetch('/stat/getEmail')
        const data = await resp.json();
        users = data;

    });
</script>
<section>
    <div class="wrapper">
        <Datatable settings={settings} data={users} bind:dataRows={rows}>
            <thead class="thhead">
            <th data-key="name" class="thhead">Név</th>
            <th data-key="email" class="thhead">Email</th>
            <th data-key="qrcode" class="thhead">QR</th>
            <th data-key="statusSent" class="thhead">Kiküldve</th>
            <th data-key="sentDate" class="thhead">Ekkor</th>

            </thead>
            <tbody>
            {#if rows}
                {#each $rows as row}
                    <tr>
                        <td>{row.name}</td>
                        <td>{row.email}</td>
                        <td>{row.qr}</td>
                        <td>{row.statusSent}</td>
                        <td>{row.sentDate.date}</td>
                    </tr>
                {/each}
            {/if}
            </tbody>
        </Datatable>
    </div>
</section>
<style>

    .wrapper {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 4px;
        background: lightskyblue;
        padding: 8px;
        height: 900vh;
        color: black;
    }
    section {
        min-height: 90vh;
        color: black;
    }

    th:first-child {
        min-width: 200px;
        color: black;
        font-weight: bold;
    }

    .thhead{
        color: black;
        font-weight: bold;
    }
    td {
        text-align: center;
        padding: 4px 0;
        color: white;
    }
</style>
<!--<script>-->

<!--    import {writable} from "svelte/store";-->

<!--    let resdata = writable([]);-->
<!--    let datas = [];-->
<!--    fetch('/stat/getEmail')-->
<!--        .then(res => res.json())-->
<!--        .then(result => {-->
<!--            if (result !== false && result !== null) {-->
<!--                datas = result;-->
<!--            }-->
<!--        })-->
<!--    let search = undefined;-->
<!--    $: visibleDatas = search ?-->
<!--        datas.filter(data => {-->
<!--            return data.name.toLowerCase().match('${search}.*')-->
<!--        }) : datas;-->

<!--</script>-->

<!--<input type="search" bind:value={search} placeholder="Search"/>-->
<!--<table>-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <td>Név</td>-->
<!--        <td>Email</td>-->
<!--        <td>QR</td>-->
<!--        <td>Kiküldve</td>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    {#each datas as row}-->
<!--        <tr>-->
<!--            <td>{row.name}</td>-->
<!--            <td>{row.email}</td>-->
<!--            <td>{row.qr}</td>-->
<!--            {#if row.statusSent === false}-->
<!--                <td>kiküldetlen</td>-->
<!--            {/if}-->
<!--            {#if row.statusSent === true}-->
<!--                <td>okés</td>-->
<!--            {/if}-->
<!--        </tr>-->
<!--    {/each}-->
<!--    </tbody>-->
<!--</table>-->