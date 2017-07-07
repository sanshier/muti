<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\wamp64\www\muti\public/../application/admin\view\admin\edit.html";i:1499389840;}*/ ?>

<form data-method="post" data-action="<?php echo url('admin/user/saveData'); ?>" data-submit="ajax" data-validate="true" class="form-horizontal">
    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title"><?php echo !empty($data['id'])?lang('Edit'):lang('Add'); ?><?php echo lang('Account'); ?></h3>
                </div>
                <input type="hidden" name="id" value="<?php echo isset($data['id']) ? $data['id'] :  ''; ?>">
                <div class="modal-body">
                    <div class="modal-body-content">
                        <div class="form-group must">
                            <label class="col-sm-3 control-label"><?php echo lang('Name'); ?></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="username" maxlength="8"  placeholder="<?php echo lang('Up_characters',['langth' =>8]); ?>" required value="<?php echo isset($data['username']) ? $data['username'] :  ''; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo lang('Mobile Number'); ?></label>
                            <div class="col-sm-7"> 
                                <input type="tel" class="form-control mobile" name="mobile" maxlength="11" placeholder="<?php echo lang('Up_characters',['langth' =>11]); ?>" required value="<?php echo isset($data['mobile']) ? $data['mobile'] :  ''; ?>"  >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo lang('Password'); ?></label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" name="password" id="password"  rangelength="[6,16]" placeholder="<?php echo lang('Range_characters',['minLangth' =>6,'maxLangth' => 16]); ?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo lang('Confirm Password'); ?></label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control equalto" name="password2" rangelength="[6,16]" placeholder="<?php echo lang('Range_characters',['minLangth' =>6,'maxLangth' => 16]); ?>" required data-rule-equalto="#password" data-msg-equalto="<?php echo lang('The password is not the same twice'); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo lang('Role'); ?></label>
                            <div class="col-sm-7">
                                <select name="role_id" id="" class="form-control" required>
                                    <?php if(is_array($roleData) || $roleData instanceof \think\Collection || $roleData instanceof \think\Paginator): $key = 0; $__LIST__ = $roleData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                                        <option value="<?php echo $key; ?>"><?php echo $vo; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo lang('Status'); ?></label>
                            <div class="col-sm-7">
                                <select name="status" class="form-control" required>
                                    <option value="1" <?php echo !empty($data['status']) && $data['status']==1?'selected' : ''; ?>><?php echo lang('Start'); ?></option>
                                    <option value="2" <?php echo !empty($data['status']) && $data['status']==2?'selected' : ''; ?>><?php echo lang('Hide'); ?></option>
                                    <option value="0" <?php echo !empty($data['status']) && $data['status']==0?'selected' : ''; ?>><?php echo lang('Off'); ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang('Cancel'); ?></button>
                    <button type="submit" class="btn btn-primary"><?php echo lang('Save'); ?></button>
                </div>
            </div>
        </div>
    </div>
</form>