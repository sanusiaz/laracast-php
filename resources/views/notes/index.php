
    <?php include_once view('/parts/footer.php');?>

    <main class="p-3">

        <a href="<?= url('/notes/create');?>" class="font-semibold p-3 py-2 text-black bg-slate-600 text-white duration-200 hover:duration-200 hober:bg-slate-800 border border-slate-600 hover:border-slate-800 hover:bg-white hover:text-slate-900 text-sm hover:shadow-md w-max rounded">Crate New Note</a>
        <?php if( is_array( $notes ) && count($notes) > 0 ):?>
        
        <?php else:?>
            <div class="py-32 text-2xl w-full font-semibold flex place-content-center place-items-center">
                No Notes Found
            </div>
        <?php endif;?>
    </main>
    <?php include_once view('/parts/footer.php');?>
