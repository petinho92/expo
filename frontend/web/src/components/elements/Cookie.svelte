<script>
    import {writable} from "svelte/store";
    import {Button} from "svelma";
    export let visible;
    export let descriptionText = "";
    export let allowButtonText = "";


    function hide() {
        visible = localStorage.setItem("allowedCookie", 'true')

    }

</script>


{#if visible === 'false'}
    <div class="notification is-black">
        <p class="has-text-white">{descriptionText}</p>
        <br>
        <Button on:click={hide} class="is-success">{allowButtonText}</Button>
    </div>
{/if}


<style>
    .notification{
        width: 100%;
        margin: -10px 0 -10px 0;
        bottom: 0;
    }
</style>
