console.log("mashaqeyey");
$('.btn').on('click', function(){
    $('#info-model').modal("show");
   
    
})

// $("#studentForm").submit(function(e){
   
//     e.preventDefualt();
   
//   // Get data from form
//     let data_form= new FormData($("#studentForm")[0]);
//   // get and add data form
//     data_form.append("action","Insert");



//     // Method
//     //dataType
//     //url
//     $.ajax({
//            Method: "POST",
//            dataType: "JSON",
//            url: "api.php",
//            processData: false,
//            contentType: false,
//            success: function (data) {
//                console.log(data);
//            },
//            error: function (data) {
//                console.log(data);
//            }

//     })
// })

$("#btn").on('click', function (e) {


    let data_form= new FormData($("#studentForm")[0]);
  
  data_form.append("action","Insert");
  console.log(data_form);
  $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "api.php",
    data: data_form,
    processData: false,
    contentType: false,
    success: function (data) {
        let status= data.status;
        let respond= data.data;
        alert(respond);
        $("#studentForm")[0].reset();
        console.log(data);
    },
    error: function (data) {
        console.log(data);
    }

})

})


// function  loadData() {
//  return   console.log("hello");

//     let sendingData= {
//         "action" : "ReadAll"
//     }
 
//     console.log(sendingData);

//   $.ajax({

//      method :"POST",
//      dataType : "JSON",
//      url: "api.php",
//      data: sendingData,
//      success: function (data) {
//          let status= data.status;
//          let respond= data.data;
//          console.log(status);
//          if(status){
//              respond.forEach(list => {
//                   console.log(list);
//              });
//          }else{
//              console.log("errorrba jira");
//          }
//      },
//      error: function (data) {
         
//          console.log("error", data);
//      }

//     })
// }

