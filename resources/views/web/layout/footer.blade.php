<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright © Your Website 2022</p></div>
</footer>
<script>
window.addEventListener('DOMContentLoaded', () => {
    const deletePost = () => {
        const deleteBtn = document.querySelectorAll('a[data-delete-post]');


        deleteBtn.forEach(el => {
            el.addEventListener('click', (e) => {
                e.preventDefault();
                fetch("http://localhost:8000" + '/posts/' + el.dataset.post_id, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        "X-CSRF-TOKEN": document.head.querySelector("[name~=csrf-token][content]").content
                    }
                })
                .then(() => {
                    document.location.href = '/profile';
                });
            })
        })
    }
    const logout = () => {
        const logoutBtn = document.querySelector('a[name="logout-btn"]');

        const bindAction = (e) => {
            e.preventDefault();
            
            fetch("http://localhost:8000" + '/logout', {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    "X-CSRF-TOKEN": document.head.querySelector("[name~=csrf-token][content]").content
                }
            })
            .then(() => {
                document.location.href = '/';
            });
        }

        logoutBtn && logoutBtn.addEventListener('click', bindAction);
    }
    logout();
    deletePost();
});

</script>