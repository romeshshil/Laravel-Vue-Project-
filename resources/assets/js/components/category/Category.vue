 <template>
 <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Category List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <table class="table">
              <thead>
                <tr>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="category in categorys">
                  <td>{{category.name}}</td>
                  <td>Doe</td>
                  <td>john@example.com</td>
                </tr>
               
              </tbody>
            </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>

      </template>


  <script>
    export default {
        data(){
          return{
            categorys:[]
          }
        },

        mounted() {
          var self=this;
          axios.get('/category').then(function(response){
               
               return self.categorys=response.data;
               // console.log(response);

          });
           
        }
    }
</script>