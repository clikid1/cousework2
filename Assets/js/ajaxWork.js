


function showRecipe(){  
    $.ajax({
        url:"./adminView/viewrecipe.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showCategory(){  
    $.ajax({
        url:"./adminView/viewCategories.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


function showCustomers(){
    $.ajax({
        url:"./adminView/viewCustomers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


//add recipe data
function addItems(){
    var r_name=$('#r_name').val();
    var r_instru=$('#r_instru').val();
    var r_ingri=$('#r_ingri').val();
    var chef_name=$('#chef_name').val();
    var categories=$('#category').val();
    var uploadd=$('#uploadd').val();
    var file=$('#file')[0].files[0];

    var fd = new FormData();
    fd.append('r_name', r_name);
    fd.append('r_instru', r_instru);
    fd.append('r_ingri', r_ingri);
    fd.append('category', categories);
    fd.append('chef_name', chef_name);
    fd.append('file', file);
    fd.append('uploadd', uploadd);
    $.ajax({
        url:"./controller/addrecipe.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('recipe Added successfully.');
            $('form').trigger('reset');
            showRecipe();
        }
    });
}


//add user data
function addItems(){
    var FirstName=$('#firstname').val();
    var LastName=$('#lastname').val();
    var Email=$('#email').val();
    var Password=$('#password').val();
    var Contact_no=$('#contact_no').val();
    var Role=$('#role').val();
    var upload=$('#upload').val();
    

    var fd = new FormData();
    fd.append('firstname', FirstName);
    fd.append('lastname', LastName);
    fd.append('email', Email);
    fd.append('password', Password);
    fd.append('contact_no', Contact_no);
    fd.append('role', Role);
    fd.append('upload', upload);
    $.ajax({
        url:"./controller/adduser.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('recipe Added successfully.');
            $('form').trigger('reset');
            showRecipe();
        }
    });
}



//edit recipe data
function itemEditForm(id){
    $.ajax({
        url:"./adminView/editrecipeForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}



//update recipe after submit
function updateItems(){
    var recipe_id = $('#recipe_id').val();
    var r_instru=$('#r_instru').val();
    var r_ingri=$('#r_ingri').val();
    var chef_name=$('#chef_name').val();
    var categories=$('#category').val();
    var existingImage = $('#existingImage').val();
    var newImage = $('#newImage')[0].files[0];
    var fd = new FormData();
    fd.append('recipe_id', recipe_id);
    fd.append('r_name', r_name);
    fd.append('r_instru', r_instru);
    fd.append('r_ingri', r_ingri);
    fd.append('category', categories);
    fd.append('chef_name', chef_name);
    fd.append('existingImage', existingImage);
    fd.append('newImage', newImage);
   
    $.ajax({
      url:'./controller/addrecipe.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Data Update Success.');
        $('form').trigger('reset');
        showRecipe();
      }
    });
}



//delete recipe data
function itemDelete(id){
    $.ajax({
        url:"./controller/deleterecipe.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Items Successfully deleted');
            $('form').trigger('reset');
            showRecipe();
        }
    });
}




//delete category data
function categoryDelete(id){
    $.ajax({
        url:"./controller/catDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Category Successfully deleted');
            $('form').trigger('reset');
            showCategory();
        }
    });
}

//delete categories data
function categoryDelete(id){
    $.ajax({
        url:"./controller/catigoriesdelete.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Category Successfully deleted');
            $('form').trigger('reset');
            showCategory();
        }
    });
}





function search(id){
    $.ajax({
        url:"./controller/searchController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.eachCategoryProducts').html(data);
        }
    });
}



