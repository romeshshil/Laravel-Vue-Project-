 <template>
 <div class="row">
          <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Category Create</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form @submit.prevent="addCategory" class="form-horizontal" >
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Email" v-model="categoryData.name">
                  </div>
                  <!-- <span class="text-danger">{{errors.name?errors.name[0]:""}}</span> -->
                </div>

  
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>

      </template>


  <script>
    export default {


            data(){
              return{
                categoryData:{
                  name:'',
                },

                // errors:{}

              }
            },

            methods:{
              addCategory(){
              axios.post('/category',this.categoryData)
              .then(response=>{
                this.categoryData="";
                this.errors="";
                this.$router.push('/category');
              })
              .catch(error=>{
                console.log(error.response)
                // this.errors=error.response.data;
              });
            }

            },

            mounted() {

                console.log("Modulented ");
            }
    }
</script>