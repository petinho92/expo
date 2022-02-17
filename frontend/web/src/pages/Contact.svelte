<script>
    import {gepesz, epitesz, korny,labor,villinf} from "src/application/store/contacts.ts";
    import Footer from '../components/elements/Footer.svelte';
    import {_} from 'svelte-i18n';
    import {locale} from 'svelte-i18n';
</script>


<section class="section">
    <h3 class="title">{$_('contact.type.epitesz')}</h3>
    <div class="container">
        {#each epitesz as member}
            <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="https://mik.pte.hu/img/no_avatar.jpg" alt={member.name_hu}>
                    </figure>
                </div>
                <div class="card-content">
                    <div class="content">
                        {#if $locale === 'hu'}
                        <h4>{member.name_hu}</h4>
                            {/if}
                        {#if $locale === 'en'}
                            <h4>{member.name_en}</h4>
                            {/if}
                        <p>{member.telephone}</p>
                        <p>{member.mobile}</p>
                        <p><a href="mailto:{member.email}">{member.email}</a></p>
                    </div>
                </div>
            </div>
        {/each}
    </div>
    <h3 class="title">{$_('contact.type.gepesz')}</h3>
    <div class="container">
        {#each gepesz as member}
            <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="https://mik.pte.hu/img/no_avatar.jpg" alt={member.name_hu}>
                    </figure>
                </div>
                <div class="card-content">
                    <div class="content">
                        {#if $locale === 'hu'}
                            <h4>{member.name_hu}</h4>
                        {/if}
                        {#if $locale === 'en'}
                            <h4>{member.name_en}</h4>
                        {/if}
                        <p>{member.telephone}</p>
                        <p>{member.mobile}</p>
                        <p><a href="mailto:{member.email}">{member.email}</a></p>
                    </div>
                </div>
            </div>
        {/each}
    </div>
    <h3 class="title">{$_('contact.type.labor')}</h3>
    <div class="container">
        {#each labor as member}
            <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="https://mik.pte.hu/img/no_avatar.jpg" alt={member.name_hu}>
                    </figure>
                </div>
                <div class="card-content">
                    <div class="content">
                        {#if $locale === 'hu'}
                            <h4>{member.name_hu}</h4>
                        {/if}
                        {#if $locale === 'en'}
                            <h4>{member.name_en}</h4>
                        {/if}
                        <p>{member.telephone}</p>
                        <p>{member.mobile}</p>
                        <p><a href="mailto:{member.email}">{member.email}</a></p>
                    </div>
                </div>
            </div>
        {/each}
    </div>
    <h3 class="title">{$_('contact.type.korny')}</h3>
    <div class="container">
        {#each korny as member}
            <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="https://mik.pte.hu/img/no_avatar.jpg" alt={member.name_hu}>
                    </figure>
                </div>
                <div class="card-content">
                    <div class="content">
                        {#if $locale === 'hu'}
                            <h4>{member.name_hu}</h4>
                        {/if}
                        {#if $locale === 'en'}
                            <h4>{member.name_en}</h4>
                        {/if}
                        <p>{member.telephone}</p>
                        <p>{member.mobile}</p>
                        <p><a href="mailto:{member.email}">{member.email}</a></p>
                    </div>
                </div>
            </div>
        {/each}
    </div>
    <h3 class="title">{$_('contact.type.villinf')}</h3>
    <div class="container">
        {#each villinf as member}
            <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="https://mik.pte.hu/img/no_avatar.jpg" alt={member.name_hu}>
                    </figure>
                </div>
                <div class="card-content">
                    <div class="content">
                        {#if $locale === 'hu'}
                            <h4>{member.name_hu}</h4>
                        {/if}
                        {#if $locale === 'en'}
                            <h4>{member.name_en}</h4>
                        {/if}
                        <p>{member.telephone}</p>
                        <p>{member.mobile}</p>
                        <p><a href="mailto:{member.email}">{member.email}</a></p>
                    </div>
                </div>
            </div>
        {/each}
    </div>
</section>

<Footer/>
<style>
    .container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        grid-gap: 0.5em;
    }

    .card {
        height: max-content;
    }

    .title{
        margin-top: 10px;
        font-size: 16px;
    }
</style>