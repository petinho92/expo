import type StudentsFormData from "../formData/studentFormData"
import handleFetch from "../services/handle-fetch";
import {active} from "src/application/services/store";


export function hirundinidae(input: StudentsFormData){
    fetch('/post/studentPost', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(input)
    }).then(function (response) {
        handleFetch(response);
        //  active = false;
        if(response.ok){
            return active.set(true);
        }
    })
}
