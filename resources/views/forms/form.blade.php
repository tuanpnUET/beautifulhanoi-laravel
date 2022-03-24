<form method="post" action="test">
    <div>
        <input type="text" name="username" placeholder="Nhap username" />
        <input type="hidden" name="_method" value="delete" />
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
    </div>
    <button type="submit" name="submit">Submit</button>
</form>