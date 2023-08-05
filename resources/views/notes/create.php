<?php view('/parts/header'); ?>

<main class="p-0">

    <section class="bg-white text-xl text-black font-Poppins text-left w-full block font-semibold border-b border-gray-300 p-5  ">
        Create New Notes
    </section>

    <div class="p-3">
        <form action="/notes/create" method="post">
            <label for="" class="font-semibold text-sm border-b border-gray-200">
                <span>Slug</span>
                <input type="text" name="slug" id="slug" class="placeholder:text-ted-500 placeholder:bg-green-400 transition-all duration-200 hover:duration-200">
            </label>
        </form>
    </div>
</main>
<?php view('/parts/footer'); ?>