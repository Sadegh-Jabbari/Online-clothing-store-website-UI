<!-- table list -->
<div class="card mb-3">
    <div class="card-header">
     افزودن دسته بندی
    </div>
    <div class="card-body">
        <form action="actions.php?add-cat" method="post">
        <input type="text" name="cat" placeholder="دسته بندی را وارد کنید" id="">
        <input type="submit" value="افزودن">
        </form>
    </div>
    </div>
<div class="card mb-3">
    <div class="card-header">
      دسته بندی ها
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table float-right" style="direction: rtl">
                <thead>
                <tr>
                    <th>ردیف</th>
                    <th>نام</th>
                    <th>حذف</th>


                </tr>
                </thead>
                <tbody>
                <?php
                $num = 1;
        $cat_query = mysqli_query($conn, "SELECT * FROM category");
        while ($cat_row = mysqli_fetch_array($cat_query)):
                ?>
                <tr>
                    <td><?php echo $num++; ?></td>
                    <td><?php echo $cat_row['cat_name']; ?></td>
                    <td>
                        <a href="actions.php?delete_cat=<?php echo $cat_row['id']; ?>" class="btn btn-danger">حذف</a>
                    </td>
                </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
