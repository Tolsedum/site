import './bootstrap.js';
// import axios from 'https://cdn.jsdelivr.net/npm/axios@1.3.5/+esm';
// window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


function fn_change_language(event){
    let target = event.target;
    let form = target.parentNode;
    if(form.tagName == "FORM"){
        form.submit();
        // console.log("target", form, target.value);
    }
}

try {
    let language_element = document.getElementById("new_language");
    language_element.addEventListener(
        "change", fn_change_language, false
    );
} catch (err) {
    passiveSupported = false;
}
