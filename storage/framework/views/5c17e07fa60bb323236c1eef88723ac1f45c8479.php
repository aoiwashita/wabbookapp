

<?php $__env->startSection('title','資料削除画面'); ?>

<?php $__env->startSection('content'); ?>
<table>
  <tr>
   <th>ISBN番号</th>
   <td><?php echo e($item->catalog_number); ?></td>
  </tr>
  <tr>
   <th>資料名</th>
   <td><?php echo e($item->catalog_name); ?></td>
  </tr>
  <tr>
   <th>分類コード</th>
   <td><?php echo e($item->catalog_code); ?></td>
  </tr>
  <tr>
   <th>著者</th>
   <td><?php echo e($item->catalog_author); ?></td>
  </tr>
  <tr>
   <th>出版社</th>
   <td><?php echo e($item->catalog_publishername); ?></td>
  </tr>
  <tr>
   <th>出版日</th>
   <td><?php echo e($item->catalog_publication); ?></td>
  </tr>
  <tr>
   <th>資料ID</th>
   <td><?php echo e($item->catalog_id); ?></td>
  </tr>
</table>
<form class="" action="document_delete_complete" method="post">
  <?php echo csrf_field(); ?>
  <table>
    <tr>
      <th>廃棄年月日</th><td><input type="text" name="disposal_date" value="<?php echo date('Y/m/j');?>" required></td>
    </tr>
    <tr>
      <th>備考</th><td><input type="text" name="catalog_remark"></td>
    </tr>
    <tr>
      <th><button type="button" name="back" class="back_button" onclick="histry()">戻る</button></th>
      <td><input type="submit" class="next_button" value="削除する"></td>
    </tr>
  </table>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\webbookapp\resources\views/document_delete.blade.php ENDPATH**/ ?>