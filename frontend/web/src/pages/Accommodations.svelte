<script>
    import {hotels} from "src/application/store/hotels.ts";
    import 'bulma-extensions/bulma-ribbon/dist/css/bulma-ribbon.min.css';
    import Footer from '../components/elements/Footer.svelte';
    import {_, locale} from 'svelte-i18n';
</script>
<section class="section">
    <div class="container">
        {#each hotels as hotel}
            <div class="card">
                <div class="columns">
                    <div class="card-image column is-two-fifths has-ribbon-left">
                        <figure class="image is-4by3">
                            <img src={hotel.picture} alt={hotel.name}>
                            <p class="ribbon is-small">{hotel.location}</p>
                        </figure>
                    </div>
                    <div class="card-content column is-three-fifths has-text-justified">
                        <p class="title is-4">{hotel.name} {hotel.star}</p>
                        {#if $locale === 'hu'}
                            <p class="subtitle is-7">{hotel.type_hu}</p>
                            <p class="subtitle is-5">{$_('accommodations.label.description')}</p>
                            <p>{@html hotel.description_hu}</p>
                        {/if}
                        {#if $locale === 'en'}
                            <p class="subtitle is-7">{hotel.type_en}</p>
                            <p class="subtitle is-5">{$_('accommodations.label.description')}</p>
                            <p>{@html hotel.description_en}</p>
                        {/if}
                        <br>
                        <div class="columns">
                            <div class="column is-two-fifths">
                                <p class="subtitle is-5">{$_('accommodations.label.services')} </p>
                                {#if $locale === 'hu'}
                                    {@html hotel.services_hu}
                                {/if}
                                {#if $locale === 'en'}
                                    {@html hotel.services_en}
                                {/if}
                            </div>
                            <div class="column is-three-fifths">
                                <p class="subtitle is-5">{$_('accommodations.label.moreinformation')} </p>
                                <p>{$_('accommodations.label.telephone')} {hotel.telephone}</p>
                                <p>{$_('accommodations.label.email')} <a href="mailto:{hotel.email}">{hotel.email}</a>
                                </p>
                                <p>{$_('accommodations.label.place')} {hotel.location}</p>
                                <p>{$_('accommodations.label.website')} <a href={hotel.website} target="_blank">Link</a></p>
                                <p>{$_('accommodations.label.maps')} <a href={hotel.maps} target="_blank">Link</a></p>
                                <p></p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        {/each}
    </div>
</section>

<Footer/>
<style>
    p {
        margin-right: 10px;
    }

    .card {
        margin-top: 15px;
    }

    figure img {
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
    }

    figure:hover img {
        -webkit-filter: grayscale(0);
        filter: grayscale(0);
    }

    @media screen and (max-width: 768px) {
        .container {
            width: 99vw;
            margin-left: -22px;
        }

        .card {
            width: 99vw;
        }
    }

</style>