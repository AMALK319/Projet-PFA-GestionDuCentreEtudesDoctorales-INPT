<template>
  <div class="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Page Heading -->
      <p>
        <span class="gauche"
          ><i class="fa fa-2x fa-plus-circle d-lg-show" aria-hidden="true"></i></span
        ><span class="gauche">
          <h1 class="h3 align left mb-2 text-gray-800">
            Formations proposées
          </h1></span
        >
      </p>
      <br><br><br>
      <div class="d-flex justify-content-center h-70">
        <div class="searchbar">
          <input class="search_input" type="text" name="" placeholder="Search..."/>
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>
      </div>
      <br /><br /><br />
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table
              class="table table-bordered"
              id="dataTable"
              width="100%"
              cellspacing="0"
            >
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
    <!-- Scroll to Top Button-->
  </div>
</template>

<script>
export default {
  name: "Dashboard",
  mounted() {
    console.log("Component mounted.");
  },
};
</script>

<style scoped>
p {
  text-align: justify;
}

p span.gauche {
  float: left;
}
 .searchbar{
    margin-bottom: auto;
    margin-top: auto;
    height: 40px;
    background-color: white;
    border-radius: 30px;
    padding: 10px;
    }

    .search_input{
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 40px;
    
    }

   

    .search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    text-decoration:none;
    }
</style>