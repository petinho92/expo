<script>
    import QR from "src/components/elements/registration/ShowQRCode.svelte";
    import Footer from "../components/elements/Footer.svelte";
    import {_} from "svelte-i18n";
    import {writable} from "svelte/store";
    let done = writable(false);
    let responseData = writable({});
    let code = writable("");
    export let params = {};
    fetch('/get/qr/'+params.code)
        .then(res => res.json())
        .then(data => {
            if(data !== false) {
                $code = data;
                $done = true;
            }
        });
</script>

{#if $done}
    <div id="app">
        <div class='columns is-mobile is-centered'>
            <div class='column is-7-desktop column is-10-mobile'>
                <div class="card mb-6">
                    <div class="is-divider is-info mt-6" data-content="QR KÓD"></div>
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">
                                {$_('qr_text')}
                            </p>
                        </header>
                        <div class="card-content">
                            <QR text={code}/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/if}
{#if $done === false}
    <div class='columns is-mobile is-centered'>
        <div class='column is-7-desktop column is-10-mobile'>
            <div class="card mb-6">
                <div class="is-divider is-info mt-6" data-content="QR KÓD"></div>
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            {$_('qr_text')}
                        </p>
                    </header>
                    <div class="card-content">
                        <h1 class="has-text-centered">{$_('qr_error')}</h1>
                        <p class="has-text-danger has-text-centered">{$_('qr_error1')}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/if}

<Footer />
