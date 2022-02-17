<script>

    import {writable} from "svelte/store";

    let resdata = writable([]);
    let data = [];
    fetch('/stat/getEmail')
        .then(res => res.json())
        .then(result => {
            if (result !== false && result !== null) {
                data = result;
            }
        })

</script>

<table>
    <thead>
    <tr>
        <td>Név</td>
        <td>Email</td>
        <td>QR</td>
        <td>Kiküldve</td>
    </tr>
    </thead>
    <tbody>
    {#each data as row}
        <tr>
            <td>{row.name}</td>
            <td>{row.email}</td>
            <td>{row.qr}</td>
            {#if row.statusSent === false}
                <td>kiküldetlen</td>
            {/if}
            {#if row.statusSent === true}
                <td>okés</td>
            {/if}
        </tr>
    {/each}
    </tbody>
</table>