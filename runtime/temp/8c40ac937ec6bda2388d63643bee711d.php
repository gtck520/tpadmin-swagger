<?php /*a:3:{s:57:"G:\konger\mytp5\application\store\view\message\index.html";i:1565423871;s:48:"G:\konger\mytp5\application\admin\view\main.html";i:1565423871;s:64:"G:\konger\mytp5\application\store\view\message\index_search.html";i:1565423871;}*/ ?>
<div class="layui-card layui-bg-gray"><?php if(!(empty($title) || (($title instanceof \think\Collection || $title instanceof \think\Paginator ) && $title->isEmpty()))): ?><div class="layui-card-header layui-anim layui-anim-fadein notselect"><span class="layui-icon layui-icon-next font-s10 color-desc margin-right-5"></span><?php echo htmlentities((isset($title) && ($title !== '')?$title:'')); ?><div class="pull-right"></div></div><?php endif; ?><div class="layui-card-body layui-anim layui-anim-upbit"><div class="think-box-shadow"><fieldset><legend>条件搜索</legend><form class="layui-form layui-form-pane form-search" action="<?php echo request()->url(); ?>" onsubmit="return false" method="get" autocomplete="off"><div class="layui-form-item layui-inline"><label class="layui-form-label">发送手机</label><div class="layui-input-inline"><input name="phone" value="<?php echo htmlentities((app('request')->get('phone') ?: '')); ?>" placeholder="请输入会员手机" class="layui-input"></div></div><div class="layui-form-item layui-inline"><label class="layui-form-label">短信内容</label><div class="layui-input-inline"><input name="content" value="<?php echo htmlentities((app('request')->get('content') ?: '')); ?>" placeholder="请输入短信内容" class="layui-input"></div></div><div class="layui-form-item layui-inline"><label class="layui-form-label">返回结果</label><div class="layui-input-inline"><input name="result" value="<?php echo htmlentities((app('request')->get('result') ?: '')); ?>" placeholder="请输入返回结果" class="layui-input"></div></div><div class="layui-form-item layui-inline"><label class="layui-form-label">发送时间</label><div class="layui-input-inline"><input name="create_at" value="<?php echo htmlentities((app('request')->get('create_at') ?: '')); ?>" placeholder="请选择发送时间" class="layui-input"></div></div><div class="layui-form-item layui-inline"><button class="layui-btn layui-btn-primary"><i class="layui-icon">&#xe615;</i> 搜 索</button><button type="button" data-export-list class="layui-btn layui-btn-primary layui-hide"><i class="layui-icon layui-icon-export"></i> 导 出</button></div></form><script>window.laydate.render({range: true, elem: '[name="create_at"]'})</script></fieldset><table class="layui-table margin-top-10" lay-skin="line"><?php if(!(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty()))): ?><thead><tr><th class='list-table-check-td think-checkbox'><input data-auto-none data-check-target='.list-check-box' type='checkbox'></th><th class='text-left nowrap'>发送手机</th><th class='text-left nowrap'>短信内容</th><th class='text-left nowrap'>返回结果</th><th class='text-left nowrap'>发送时间</th><th></th></tr></thead><?php endif; ?><tbody><?php foreach($list as $key=>$vo): ?><tr><td class='list-table-check-td think-checkbox'><input class="list-check-box" value='<?php echo htmlentities($vo['id']); ?>' type='checkbox'></td><td><?php echo htmlentities((isset($vo['phone']) && ($vo['phone'] !== '')?$vo['phone']:'')); ?></td><td><?php echo htmlentities((isset($vo['content']) && ($vo['content'] !== '')?$vo['content']:'')); ?></td><td><?php echo htmlentities((isset($vo['result']) && ($vo['result'] !== '')?$vo['result']:'')); ?></td><td><?php echo htmlentities((isset($vo['create_at']) && ($vo['create_at'] !== '')?$vo['create_at']:'')); ?><br></td><td><?php if(auth("store/member/remove")): ?><a class="layui-btn layui-btn-sm layui-btn-danger" data-confirm="确定要删除数据吗?" data-action="<?php echo url('remove'); ?>" data-value="id#<?php echo htmlentities($vo['id']); ?>">删 除</a><?php endif; ?></td></tr><?php endforeach; ?></tbody></table><?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?><span class="notdata">没有记录哦</span><?php else: ?><?php echo (isset($pagehtml) && ($pagehtml !== '')?$pagehtml:''); ?><?php endif; ?></div></div></div>