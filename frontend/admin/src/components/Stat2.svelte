<script>
    import {Datatable} from 'svelte-simple-datatables';
    import {onMount} from "svelte";
    import "../applications/css/datatable.dark.css";

    let rows;
    let users = [];
    const settings = {
        sortable: true,
        pagination: true,
        rowsPerPage: 5,
        columnFilter: false,
    }

    onMount(async () => {
        const resp = await fetch('/stat/getList')
        const data = await resp.json();
        users = data;

    });
</script>
<section>
    <Datatable settings={settings} data={users} bind:dataRows={rows}>
        <thead>
        <th data-key="name">Név</th>
        <th data-key="neptun">Neptun/EHA</th>
        <th data-key="qrcode">QR</th>
        </thead>
        <tbody>
        {#if rows}
            {#each $rows as row}
                <tr>
                    <td>{row.name}</td>
                    <td>{row.neptun}</td>
                    <td>{row.qrcode}</td>
                </tr>
            {/each}
        {/if}
        </tbody>
    </Datatable>
</section>
<style>


    section {
        width: 100%;
        height: 560px;
    }

    /*th:first-child {*/
    /*    min-width: 100px;*/
    /*}*/

    /*td {*/
    /*    text-align: center;*/
    /*    padding: 4px 0*/
    /*}*/
</style>