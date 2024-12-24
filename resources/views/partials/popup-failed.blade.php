@if (session('failed'))
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Swal.fire({
                icon: "error",
                title: "Failed!",
                text: '{{ session('failed') }}',
                confirmButtonColor: "#1d4ed8",
            });
        });
    </script>
@endif