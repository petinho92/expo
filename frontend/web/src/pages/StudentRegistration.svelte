<script>
    import {_} from "svelte-i18n";
    import {Button} from 'svelma';
    import StudentFormData from "src/application/formData/studentFormData.ts";
    import {majors_hu, majors_en} from "src/application/store/getMajor.ts";
    import {hirundinidae} from "src/application/services/hirundinidae.ts";
    import ModalCard from "src/components/elements/registration/ModalCard.svelte";
    import InputField from "src/components/elements/registration/InputField.svelte";

    import SelectField from "src/components/elements/registration/SelectField.svelte";
    import {active} from "src/application/services/store.ts";
    import {locale} from "svelte-i18n";
    import Footer from "src/components/elements/Footer.svelte";
    import {semesters_hu, semesters_en} from "src/application/store/getSemester.ts";
    import {programs1,programs2} from "src/application/store/getPrograms.ts";


    let formData = new StudentFormData();
    let selectedPrograms=[];
    let selectedPrograms2=[];
    let selectedMajor="";
    let selectedSemester="";
    let privacy;
    let covid;

    function sendData() {
        formData.major=selectedMajor.name;
        formData.semester=selectedSemester.name;
        formData.programs = selectedPrograms.concat(selectedPrograms2);
        formData.lang = $locale;
        hirundinidae(formData);
    }

</script>

<div class="container is-max-desktop mt-6 cont">
    <div class="tile is-parent">
        <div class="tile is-child box formcolor">
            <p class="title has-text-centered">{$_('menu.registration.registration')}</p>
            <div class="is-divider is-info" data-content={$_('form.common.dividers.personal_info')}></div>


            <InputField placeholder={$_('form.common.name')} label={$_('form.common.name')} needIcon={true}
                        require={true} bind:value={formData.name}
                        iconTag="fas fa-user"/>
            <InputField placeholder="example@example.com" label="Email" require={true} needIcon={true}
                        iconTag="fas fa-envelope" bind:value={formData.email}/>
            <InputField placeholder="Neptun kód" label={$_('form.common.neptun')} needIcon={true} require={true}
                        bind:value={formData.neptun} iconTag="fas fa-laptop-code"/>


            <InputField placeholder="+36301234567" label={$_('form.common.mobile')} needIcon={true} require={false}
                        bind:value={formData.mobile}
                        iconTag="fas fa-mobile"/>
            {#if $locale === "hu"}
                <SelectField label="Szak " collection={majors_hu} require={true} optionIdentifier="name"
                             labelIdentifier="name" bind:value={selectedMajor}
                             placeHolder={$_('form.common.selectFirstElement')}/>
                <SelectField label="Szemester" collection={semesters_hu} require={true} optionIdentifier="name"
                             labelIdentifier="name" bind:value={selectedSemester}
                             placeHolder={$_('form.common.selectFirstElement')}/>
            {/if}

            {#if $locale === "en"}
                <SelectField label="Major " collection={majors_en} require={true} optionIdentifier="name"
                             labelIdentifier="name" bind:value={selectedMajor}
                             placeHolder={$_('form.common.selectFirstElement')}/>
                <SelectField label="Semester" collection={semesters_en} require={true} optionIdentifier="name"
                             labelIdentifier="name" bind:value={selectedSemester}
                             placeHolder={$_('form.common.selectFirstElement')}/>
            {/if}


            <br>
            <div class="is-divider is-info" data-content={$_('form.common.dividers.programs')}></div>
            <label class="label has-text-left">{$_('form.common.programs.label.first')}<b class="has-text-danger">*</b>
            </label>
            {#each programs1 as prog}
            <input
                    type="checkbox"
                    bind:group={selectedPrograms}
                    value={prog}
            /> {prog.name}<br>
            {/each}
            <br>
            <label class="label has-text-left">{$_('form.common.programs.label.second')}<b class="has-text-danger">*</b>
            </label>
            {#each programs2 as prog}
                <input
                        type="checkbox"
                        bind:group={selectedPrograms2}
                        value={prog}
                /> {prog.name}<br>
            {/each}
            <div class="is-divider is-info" data-content={$_('form.common.dividers.termsofuse')}></div>
            <label class="checkbox has-text-left-mobile">
                <br><input type="checkbox" bind:checked={covid}>
                {$_('form.common.label.consent')}<b
                    class="has-text-danger">*</b>
            </label>
            <label class="checkbox has-text-left-mobile">
                <br><input type="checkbox" bind:checked={privacy}>
                {@html $_('form.common.label.privacy_policy.student')}<b
                    class="has-text-danger">*</b>
            </label>

            <div class="field mt-4">
                <Button type="is-info" on:click={sendData}
                        disabled>{$_('menu.registration.registration')}</Button><p class="has-text-danger">{$_('form.common.registration.disabled')}</p>
                <!--disabled={!privacy | !covid}-->
            </div>
        </div>
    </div>
</div>


<Footer/>

<ModalCard bind:active={$active} title={$_('modal.title')}>
    <div class="modal-card-body">
        <p></p>
        <p>{$_('modal.body')}</p>
        <p>{$_('modal.body1')}</p>
        <p></p>
    </div>
</ModalCard>