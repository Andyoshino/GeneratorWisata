<div class="navbar-dashboard w-full bg-gradient-to-r from-indigo-300 to-indigo-400 py-5 px-12">

    <div class="flex">
        <div class="basis-1/2 font-bold text-white flex items-center text-2xl">
            genewisa
        </div>

        <div class="basis-1/2 flex justify-end items-center">
            <button id="logout" class="bg-white py-1 px-8 rounded-full text-indigo-400">
                Logout
            </button>
        </div>
    </div>

</div>

<script>
    $("#logout").click(function() {

        $.ajax({
            type: 'POST',
            url: '/logout',
            success: function(data) {
                location.href = '/';
            }
        });

    });
</script>
