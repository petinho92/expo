<script lang="ts">
    import {Youtube, Player, Ui, DblClickFullscreen} from '@vime/svelte';
    import {y2022video} from "src/application/store/gallery";
</script>


{#each y2022video as yt}
    <section class="section">
        <div class="card">
            <Player controls>
                <Youtube videoId={yt.src}/>
            </Player>
        </div>
    </section>
{/each}

<style>
    .card {
        margin: auto;
        max-width: 50vw;
    }
</style>