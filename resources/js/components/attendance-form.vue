<template>

	<div>

		<el-main>
        <div class="row justify-content-center" style="margin-top:6%;">
          	
            <div class="jumbotron col-md-6">
            
            <form method="POST" @submit.prevent="submit">
    

            	<h3>Complete to Take Attendance</h3>
                
            
	            <div class="form-group mt-4">
	            	<el-input class="col-md-12 p-0" placeholder="Please enter your Username" name="username" suffix-icon="el-icon-user" id="username" v-model="username" clearable>
                </el-input>
                <div v-if="errors && errors.username[0]" class="text-danger">{{ errors.username[0] }}</div>
	            </div>
          
              <div class="form-group mt-4">
                <el-select class="col-md-12 p-0" placeholder="Select Cohort" v-model="cohort" 
                name="cohort" id="cohort" clearable>
                  <el-option
                    v-for="cohort in cohorts"
                    :key="cohort.id"
                    :label="cohort.name"
                    :value="cohort.status">
                  </el-option>
                 </el-select>
                 <div v-if="errors && errors.cohort[0]" class="text-danger">{{ errors.cohort[0] }}</div>
              </div>

	            <div class="form-group d-flex mt-5 justify-content-between">
                <input type="reset" class="btn btn-danger" value="Reset">
	              <button type="submit" class="btn btn-primary">Take Attendance</button>
	            </div>
          
          </form>
          
          </div>
        
        </div>
    
    </el-main>
	
  </div>

</template>


<style type="text/css" media="screen">

.jumbotron{
	background-color:rgba(225,225,225,0);
	box-shadow: 0px 1px 4px 0px rgba(0,0,0,0.5);
}
	
</style>

<script>
export default {
  data() {
    return {
      cohorts:[],
      cohort:{
        id: '',
        name: '',
        status: '',
      },
      username: '',
      cohort: '',
      // fields:{},
      errors:{
        username:[],
        cohort:[]
      },
    }
  },

  created(){
  	this.fetchCohorts();
  },

  methods:{
  	
    fetchCohorts(){
  		fetch('api/cohorts')
  		.then(res => res.json())
  		.then(res => {
  			this.cohorts = res.data;
  		});
    },

    validate(){
      let isValid = true;
      if(this.username.trim() == ''){
        this.errors.username.push("Username is required");
        isValid = false;
      }
      if(this.cohort.trim() == ''){
        this.errors.cohort.push("Please select a cohort");
        isValid = false;
      }
      return isValid;
    },


    submit() {
      // this.errors = {};
      if(this.validate()){
      axios.post('http://127.0.0.1:8000/api/submit',{
          'username': this.username,
          'cohort': this.cohort
      })
      .then(res => {
          console.log(res.data);
        this.username = '';
        this.cohort = '';
      })
      .catch(error => {
        if (error.response.status === 422) {
          this.errors = error.response.data.errors || {};
        }
      });

      }
      
    },


  }

}; 
</script>
