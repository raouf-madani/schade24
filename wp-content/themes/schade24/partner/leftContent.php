<?
$baseurlchat = 'http://alkawtheruae.com/testingserver/schade/chat/';
//$baseurlchat = 'http://localhost/schade24new/dynamic/chat/';
?>
<aside class="left-side sidebar-offcanvas">                
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left info">
                <p><?=$this->session->userdata('PRCOMPYNAME')?>, </p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                <br />
                <a href="<?=site_url()?>page/logout"><u>Logout</u></a>
                
            </div>
        </div>
        <!-- search form -->
        <!--
		<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
		-->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="treeview active">
                <a href="#" class="sub"><i class="fa fa-file"></i> <b>Dossiers Beheren</b></a>
                <ul class="treeview-menu">
                	<li><a href="<?=site_url()?>page/managecasepartner/1" class="sub">Aangenomen</a></li>
                    <li><a href="<?=site_url()?>page/managecasepartner/2" class="sub">In afwachting</a></li>
                    <li><a href="<?=site_url()?>page/managecasepartner/0" class="sub">Afgekeurd</a></li>
                </ul>
                <a href="<?=site_url()?>page/addnewcasepartner/<?=$_SESSION['PRREGID']?>" class="sub"><i class="fa fa-plus-square"></i> <b>Dossier Toevoegen</b></a>
                <a href="<?=site_url()?>page/managepartnerpersonaldetails" class="sub"><i class="fa fa-user"></i> <b>Pesoonlijke gegevens</b></a>
            </li>
            
            
        </ul>
        
    </section>
    <!-- /.sidebar -->
    
    
</aside>