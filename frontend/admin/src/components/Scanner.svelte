<script>
    import {programs, scannerData, days} from '../applications/statData/GetPrograms'
    import ScannerFormData from "src/applications/formData/ScannerFormData.ts";
    import {writable} from "svelte/store";

    let formData = new ScannerFormData();

    let success = writable(true);
    let visible = writable(false);

    let inputQR = "";
    let resQr;
    let resName;
    let resNeptun;
    let responseData;
    let message = writable("");

    function onRegister(event) {
        if (event.key === 'Enter') {
            formData.qrCode = inputQR;
            console.log(formData);
            fetch('/access/processingQRCode', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(formData)
            })
                .then(response => response.json())
                .then(data => {
                    if (data.statusCode === 422) {
                        console.log("lel");
                        $success = false;
                        $visible = true;
                        $message = data.message;
                    } else if (data.statusCode === 200) {
                        $success = true;
                        $visible = true;
                        resName = data.name;
                        resQr = data.qrcode;
                        responseData = data;
                    }
                })
                .finally(inputQR = "")
        }
    }

</script>

<div class='container'>
    <div class='columns is-mobile is-centered'>
        <div class='column is-7-desktop column is-10-mobile has-background-info-light'>
            <div class="card mb-6">
                <div class="card-content">

                    <p class="title has-text-centered is-size-4-mobile">QR Scanner</p>
                    <p class="subtitle is-5 has-text-left"></p>

                </div>
                <div class="is-divider is-info" data-content="Adatok"></div>
                <div class="content">
                    <div class="field ml-5 mr-5">
                        <label class="label has-text-left">Nap<b class="has-text-danger"></b></label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <!--                                <select bind:value={formData.programType} >-->
                                <select bind:value={formData.date}>
                                    <option value="">Kérem válasszon!</option>
                                    {#each days as day}
                                        <option value={day.name}>{day.name}</option>
                                    {/each}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field ml-5 mr-5">
                        <label class="label has-text-left">Terem<b class="has-text-danger"></b></label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select bind:value={formData.room}>
                                    <option value="">Kérem válasszon!</option>
                                    {#each scannerData as prog}
                                        {#if formData.date === prog.date}
                                            <option value={prog.room}>{prog.room}</option>
                                        {/if}
                                    {/each}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field ml-5 mr-5">
                        <label class="label has-text-left">Előadás<b class="has-text-danger"></b></label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select bind:value={formData.phase}>
                                    <option value="">Kérem válasszon!</option>
                                    {#each scannerData as prog}
                                        {#if formData.room === prog.room && formData.date === prog.date}
                                            <option value={prog.phase}>{prog.time} - {prog.phase}</option>
                                        {/if}
                                    {/each}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="field ml-5 mr-5">
                            <label class="label has-text-left">QR kód<b class="has-text-danger">*</b></label>
                            <div class="control">
                                <input class="input" type="text" bind:value={inputQR} placeholder="QR kód"
                                       on:keydown={onRegister}/>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class='container'>
    <div class='columns is-mobile is-centered is-bold'>
        <div class='column is-7-desktop column is-10-mobile is-bold' class:is-hidden={!$visible}
             class:has-background-success={$success} class:has-background-danger={!$success}>
            {#if $success && resName != undefined}
                <!--                <h1 class="has-text-centered has-text-white"><b>Sikeres regisztráció</b><br></h1>-->
                <table  class="fl-table">
                    <tr>
                        <td class="titlelabel">Név: </td>
                        <td class="titlelabel">Egyetemi azonosító: </td>
                    </tr>
                    <tr>
                        <td class="titlevalue">{resName[0]}</td>
                        <td class="titlevalue">{resName[1]}</td>
                    </tr>
                    <tr>
                        <td colspan="2">{resQr}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><h2 class="center">Sikeres leolvasás!</h2></td>
                    </tr>
                </table>
<!--                <h1 class="has-text-centered has-text-white">{resName[0]}</h1>-->
<!--                <h4 class="has-text-centered has-text-white">Neptun kód: {resName[1]}</h4>-->
<!--                <h4 class="has-text-centered has-text-white">{resQr}</h4>-->
<!--                <h2 class="has-text-centered has-text-white"><b>Sikeres leolvasás!</b><br></h2>-->
            {/if}
            {#if !$success}
                <h1 class="has-text-centered has-text-white"><br><b>Hiba!</b><br>{$message}</h1>
            {/if}
        </div>
    </div>
</div>

<style>
    /*table{*/
    /*    border-style: none;*/
    /*    color: white;*/
    /*}*/
    .titlelabel{
        font-size: 20px;
    }

    .titlevalue{
        font-size: 26px;
        font-weight: bold;
    }
    .center{
        text-align: center;
        color: white;
    }

    .fl-table {
        color: white;
        border-radius: 5px;
        font-weight: normal;
        border: none;
        border-collapse: collapse;
        width: 100%;
        max-width: 100%;
        white-space: nowrap;
    }

    .fl-table td, .fl-table th {
        text-align: center;
        padding: 8px;
    }

    .fl-table td {
        border-right: 1px solid #f8f8f8;
    }




</style>