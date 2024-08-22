<style>
    .alert {
        transition: opacity 0.5s ease-in-out; /* Smoothly transition opacity */
        margin: 0 auto; /* Center the alerts */

    }
</style>

@if(session('error'))
    <div id="errorAlert" class="alert alert-danger alert-dismissible fade show " role="alert" data-bs-autohide="true">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('success'))
    <div id="successAlert" class="alert alert-success alert-dismissible fade show " role="alert" data-bs-autohide="true">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('info'))
    <div id="infoAlert" class="alert alert-info alert-dismissible fade show " role="alert" data-bs-autohide="true">
        {{ session('info') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if($errors->any())
    @foreach ($errors->all() as $error)
        <div id="errorAlert" class="alert alert-danger alert-dismissible fade show " role="alert" data-bs-autohide="true">
            {{ $error}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforeach
@endif

<script>
    // Smoothly close alerts after 5 seconds
    window.setTimeout(function() {
        $(".alert").fadeTo(300, 0).slideUp(300, function(){
            $(this).remove();
        });
    }, 8000); // Adjust timing to match CSS transition duration
</script>
