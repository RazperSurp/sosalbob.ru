document.addEventListener('DOMContentLoaded', () => {
    document.forms.register.onsubmit = e => {
        e.preventDefault();
        fetch('/backend/register.php', {
            method: 'POST',
            body: new FormData(e.currentTarget)
        }).then(xhr => {
            if (!xhr.ok) alert('ERROR!');
            else alert('SUCCESS!');
            xhr.json();
        }).then(json => {
            console.log(json);
        })

        return false;
    }
})