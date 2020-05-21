

<?php $__env->startSection('title','会員退会画面'); ?>

<?php $__env->startSection('content'); ?>
<table>
  <tr>
   <th>会員ID</th>
   <td><?php echo e($item->user_id); ?></td>
  </tr>
  <tr>
   <th>名前</th>
   <td><?php echo e($item->user_name); ?></td>
  </tr>
  <tr>
   <th>住所</th>
   <td><?php echo e($item->user_address); ?></td>
  </tr>
  <tr>
   <th>電話番号</th>
   <td><?php echo e($item->user_tel); ?></td>
  </tr>
  <tr>
   <th>メールアドレス</th>
   <td><?php echo e($item->user_email); ?></td>
  </tr>
  <tr>
   <th>生年月日</th>
   <td><?php echo e($item->user_birthday); ?></td>
  </tr>
  <tr>
    <th><button type="button" name="back" class="back_button" onclick="histry.back()">戻る</button></th>
    <td><button type="submit" class="next_button" onclick="location.href='./member_withdrawal_complete'">退会する</button></td>
  </tr>
</table>
<form>
  <input type="hidden" name="user_deleteday" value="<?php echo e(date('y/m/d')); ?>">
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\webbookapp\resources\views/member_withdrawal.blade.php ENDPATH**/ ?>