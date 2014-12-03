<?php include 'common/header.php';?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">主题管理</h3>
                    </div>
                    <div class="panel-body table-responsive">
                        <?php echo form_open('admin/topic/search', array('class' => 'navbar-form navbar-left', 'role' => 'form'));?>
                            <div class="form-group">
                                <input type="text" class="form-control" id="title" name="title" placeholder="搜索标题" value="<?php echo $title; ?>">
                            </div>
                            <button type="submit" class="btn btn-default">提交</button>
                        </form>
                        <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>标题</th>
                                <th>作者</th>
                                <th>发布时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($topics as $topic) : ?>
                              <tr>
                                <td><?php echo $topic['tid'];?></td>
                                <td><a href="<?php echo base_url('topic/'.$topic['tid']);?>" target="_blank"><?php echo $topic['title'];?></a></td>
                                <td><a href="<?php echo base_url('member/'.$topic['username']);?>" target="_blank"><?php echo $topic['username'];?></a></td>
                                <td><?php echo date('Y-m-d H:i', $topic['addtime']); ?></td>
                                <td><a href="<?php echo base_url('admin/topic/edit/'.$topic['tid']);?>" target="_blank">编辑</a></td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        <ul class="pager"><?php echo $pagination;?></ul>
                    </div>
                </div>
            </div><!-- /.col-md-8 -->

<?php include 'common/sidebar.php';?>

        </div><!-- /.row -->
    </div><!-- /.container -->

<?php include 'common/footer.php';?>
</body>
</html>