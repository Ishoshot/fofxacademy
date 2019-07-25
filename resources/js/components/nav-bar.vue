<template>
<div>
  <el-container>
    <el-header>
        <el-row>
            <el-col :span="12">
                <div class="grid-content">
                    <img src="https://www.fofxacademy.com/wp-content/uploads/2018/11/fofx_white.png" alt="">
                </div>
            </el-col>
            <el-col :span="12" style="text-align:right;" class="d-none d-xl-block">
                <div class="grid-content">
                    <span style="font-size:20px;">Date || Time</span>
                    <el-dropdown>
                        <i class="el-icon-setting ml-5" style="font-size:20px;color:#fff;"></i>
                        <el-dropdown-menu slot="dropdown">
                        <el-dropdown-item>View</el-dropdown-item>
                        <el-dropdown-item>Add</el-dropdown-item>
                        <el-dropdown-item>Delete</el-dropdown-item>
                        </el-dropdown-menu>
                    </el-dropdown>
                </div>
            </el-col>
        </el-row>
    </el-header>

</el-container>

</div>
</template>

<style>
  .el-header {
    background-color:#0273be;
    color: #fff;
    height:auto;
    line-height: 60px;
  }

  img{
    min-width:30%;
    max-height:60px;
  }

</style>

<script>

</script>
