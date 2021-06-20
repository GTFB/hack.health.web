<div class="accordion" id="actions">
    <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
            <form class="action-data-form-<?php echo e($action->id); ?>" action="">
                <div class="card-header" id="heading<?php echo e($action->id); ?>">
                    <h5 class="mb-0">
                        <button class="btn btn-toolbar w-100" type="button" data-toggle="collapse" data-target="#action<?php echo e($action->id); ?>" aria-expanded="false" aria-controls="action<?php echo e($action->id); ?>">
                            <input type="text" name="name" class="form-control" placeholder="Please, enter the action name" value="<?php echo e($action->name); ?>">
                        </button>
                    </h5>
                </div>
                <div id="action<?php echo e($action->id); ?>" class="collapse" aria-labelledby="heading<?php echo e($action->id); ?>" data-parent="#actions">
                    <div class="card-body">
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="status-<?php echo e($action->id); ?>" name="status" <?php if($action->status): ?> checked <?php endif; ?>>
                            <label class="custom-control-label" for="status-<?php echo e($action->id); ?>" style="user-select: none">Enabled</label>
                        </div>

                        <div class="form-group">
                            <label for="priority">Priority</label>
                            <input type="text" name="priority" class="form-control" required value="<?php echo e($action->priority); ?>">
                        </div>

                        <div class="form-group">
                            <label for="provider_client">Provider Client</label>
                            <select class="form-control" id="provider_client" name="provider_client_id">
                                <?php $__currentLoopData = $providerClients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($client->id); ?>" <?php if($action->provider_client_id == $client->id): ?> selected <?php endif; ?>><?php echo e($client->id); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="source">Source</label>
                            <select class="form-control" id="source" name="source">
                                <option value="remoteUser">Remote user</option>
                                <option value="model">Model</option>
                                <option value="dataSource">Data source</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="model">Target model</label>
                            <select class="form-control" id="model" name="model_class">
                                <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($class = isset($model->parent) ? $model->parent->namespace : $model->namespace); ?>" <?php if($action->model_class == $class): ?> selected <?php endif; ?>><?php echo e($model->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="button" class="btn btn-danger delete_action" data-method="delete" data-action="<?php echo e($action->id); ?>" data-url="<?php echo e(url('/plugins/oauth2/actions/delete/' . $action->id)); ?>" >Remove action</button>
                            <button type="button" class="btn btn-secondary add_row" data-method="get" data-action="<?php echo e($action->id); ?>" data-url="<?php echo e(url('/plugins/oauth2/add_row')); ?>" >Add row</button>
                            <button type="submit" class="btn btn-success save_new_action" data-method="post" data-action="<?php echo e($action->id); ?>" data-url="<?php echo e(url('/plugins/oauth2/actions/update/' . $action->id)); ?>" >Save action</button>
                        </div>

                        <?php if($action->data): ?>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Source_field</th>
                                    <th scope="col">Model_field</th>
                                    <th scope="col">Unique</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $action->data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="text-center">
                                        <td><input type="text" name="data[]" class="form-control" data-key="value" required value="<?php echo e($key); ?>"></td>
                                        <td><input type="text" name="data[]" class="form-control" data-key="name" required value="<?php echo e($data); ?>"></td>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="status-<?php echo e($data); ?>" value="<?php echo e($key); ?>" name="unique_data[<?php echo e($data); ?>]" <?php if(is_array($action->unique_data) && in_array($key, $action->unique_data)): ?> checked <?php endif; ?>>
                                            </div>
                                        </td>
                                        <td><span class="clear_row" style="text-decoration: none; color: #e3342f; cursor: pointer"><span style="font-size: 15px" class="glyphicon glyphicon-remove" aria-hidden="true"></span></span></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        <?php else: ?>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Source_field</th>
                                    <th scope="col">Model_field</th>
                                    <th scope="col">Unique</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        <?php endif; ?>
            </form>
        </div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /var/www/hack.medin.cloud/Modules/Oauth2/Resources/views/actions_list.blade.php ENDPATH**/ ?>