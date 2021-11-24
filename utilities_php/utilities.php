<?php
    require('dbconnection.php');
    
    function render_table(){
        $conn = new DBConnection(); 
        $result = $conn->fetch_all_products('1'); 
        $html_response = "";
        while($rows = mysqli_fetch_array($result)){
            $html_response .= '<tr class="row">';
            $html_response .= '<td class="col">' . $rows['title']. '</td>';
            $html_response .= '<td class="col">' . $rows['price'] . '</td>';
            $html_response .= '<td class="col">' . $rows['description'] . '</td>';
            $html_response .= '<td class="col"> <div class="row">' . 
                '<form class="col" method="POST" action="../utilities_php/check_actions.php">' .
                    '<input type="hidden" name="delete_product">'.
                    '<input type="hidden" name="id" value="'. $rows['id'] .'">'.
                    '<button type="submit" value="'. $rows['id'] .'" class="btn btn-danger" title="" name="id"><i class="fas fa-trash-alt"></i></button>' .
                '</form>' .
                '<form class="col" method="POST" action="update-products.php">' . 
                    '<input type="hidden" name="update_product" value="'. $rows['id'] .'">'.
                    '<input type="hidden" name="id" value="'. $rows['id'] .'">'.
                    '<button type="submit" class="btn btn-success"><i class="fas fa-pencil-alt"></i></button>'.                     
                '</form>'. 
            '</td></div>';
            $html_response .= "</tr>";                
        }
        return $html_response;
    }

    function show_products(){
        $conn = new DBConnection(); 
        $result = $conn->fetch_all_products(); 
        $html_response = "";
        
        while($rows = mysqli_fetch_array($result)){
            $html_response .= '<a class="card product-card text-white" style="text-decoration: none;" href="../jewelry-info/product-details.php?product=' . $rows['title'] .'&id='. $rows['id'] .'">';
            $html_response .= '<div class="img-container">';
            $html_response .= '<img class="product-img" src="data:image/jpg;base64,' . base64_encode($rows['image']) . '">'; 
            $html_response .= '</div>';
            $html_response .= '<h4 class="card-body product-info">' . $rows['title'] . '</h4>';
            $html_response .= '<h4 class="card-body">Q' . $rows['price'] . '</h4>';
            $html_response .= '</a>';
        }

        return $html_response;
    }   

    function render_users(){
        $conn = new DBConnection(); 
        $query = "SELECT * FROM administrator";
        $result = $conn->run_query($query);
        $html_response = "";
        while($rows = mysqli_fetch_array($result)){
            $html_response .= '<tr class="row">';
            $html_response .= '<td class="col">' . $rows['username']. '</td>';
            $html_response .= '<td class="col"> <div class="row">' . 
                '<form class="col" method="POST" action="../utilities_php/check_actions.php">' .
                    '<input type="hidden" name="delete_user">'.
                    '<input type="hidden" name="id" value="'. $rows['id'] .'">'.
                    '<button type="submit" value="'. $rows['id'] .'" class="btn btn-danger" title="" name="id"><i class="fas fa-trash-alt"></i></button>' .
                '</form>' .
                '<form class="col" method="POST" action="update-users.php">' . 
                    '<input type="hidden" name="update_user" value="'. $rows['id'] .'">'.
                    '<input type="hidden" name="id" value="'. $rows['id'] .'">'.
                    '<button type="submit" class="btn btn-success"><i class="fas fa-pencil-alt"></i></button>'.                     
                '</form>'. 
            '</td></div>';
            $html_response .= "</tr>";                
        }
        return $html_response;
    }

?>