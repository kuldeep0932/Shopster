
    <!--------------------------Header-------------->
    <?php 
    include ("./include/header.php");
    ?>

    <!-------------------------Login Form Section-------------->
    <div class="user_container">
        <div class="admin_sidebar">
            <div class="title">
                <img src="https://cdn.shopify.com/s/files/1/0710/9122/4872/files/favicon_1_32x32.png?v=1675165979"
                    alt="logo" style="width:30px; height:30px;">
                <div>
                    <h2>Admin</h2>
                    <p>Shopster</p>
                </div>
            </div>
            <div class="side_nav">
                <div class="dash"><i class="fa-regular fa-folder"></i><a
                        href="..\componants\userpanel.php">Dashboard</a></div>
                <div class="dash side_nav_active"><i class="fa-solid fa-users"></i>Customers</div>
                <div class="dash"><i class="fa-solid fa-rectangle-list"></i>Products</div>
                <div class="dash"><i class="fa-solid fa-cart-shopping"></i>Orders</div>
            </div>
        </div>
        <div class="admin_logo">
            <div class="user_logo">
                <img src="..\assets\images\user.png" alt="">
                <div class="setting">Hello User <i class="fa-sharp fa-solid fa-gear"></i>
                    <ul>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Your Order</a></li>
                        <li><a href="#">Account Setting</a></li>
                        <li><a href="#">Log Out</a></li>
                    </ul>
                </div>
            </div>
            <div class="dashboard_content customer_dashboard">
                <div class="first_col">
                    <div class="contetn_card best_products">
                        <div class="list_head">
                            <h4>New Customers</h4>
                            <div class="pagination">
                            <select>
                                <option class="option">Show : 4</option>
                                <option>Show : 8</option>
                            </select>
                            <input type="date">
                        </div>
                        </div>
                        <div class="list_product">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>User</th>
                                        <th>Email</th>
                                        <th>User Id</th>
                                        <th>Status</th>
                                    </tr>
                                    <tr class="profileview">
                                        <td class="product_logo userlogo"><img src=".\assets\images\user.png"
                                                alt="logo">
                                            <h5>User Name</h5>
                                        </td>
                                        <td>test@gmail.com</td>
                                        <td>1001</td>
                                        <td>Approved</td>
                                    </tr>
                                    <tr>
                                        <td class="product_logo userlogo"><img src=".\assets\images\user.png"
                                                alt="logo">
                                            <h5>User Name</h5>
                                        </td>
                                        <td>test@gmail.com</td>
                                        <td>1002</td>
                                        <td>Approved</td>
                                    </tr>
                                    <tr>
                                        <td class="product_logo userlogo"><img src=".\assets\images\user.png"
                                                alt="logo">
                                            <h5>User Name</h5>
                                        </td>
                                        <td>test@gmail.com</td>
                                        <td>1003</td>
                                        <td>Approved</td>
                                    </tr>
                                    <tr>
                                        <td class="product_logo userlogo"><img src=".\assets\images\user.png"
                                                alt="logo">
                                            <h5>User Name</h5>
                                        </td>
                                        <td>test@gmail.com</td>
                                        <td>1004</td>
                                        <td>Approved</td>
                                    </tr>
                                    <tr>
                                        <td class="product_logo userlogo"><img src=".\assets\images\user.png"
                                                alt="logo">
                                            <h5>User Name</h5>
                                        </td>
                                        <td>test@gmail.com</td>
                                        <td>1005</td>
                                        <td>Approved</td>
                                    </tr>
                                    <tr>
                                        <td class="product_logo userlogo"><img src=".\assets\images\user.png"
                                                alt="logo">
                                            <h5>User Name</h5>
                                        </td>
                                        <td>test@gmail.com</td>
                                        <td>1006</td>
                                        <td>Approved</td>
                                    </tr>
                                    <tr>
                                        <td class="product_logo userlogo"><img src=".\assets\images\user.png"
                                                alt="logo">
                                            <h5>User Name</h5>
                                        </td>
                                        <td>test@gmail.com</td>
                                        <td>1007</td>
                                        <td>Approved</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="second_col profilecard">
                    <div class="contetn_card best_products">
                        <div class="user_profile">
                            <div class="profile_logo">
                                <img src=".\assets\images\user.png" alt="">
                                <h4>Admin</h4>
                            </div>
                            <div class="profile_details">
                                <div>
                                    <h4>User-ID :</h4>1001
                                </div>
                                <div>
                                    <h4>Admin Name :</h4>Kuldeep Kumar
                                </div>
                                <div>
                                    <h4>Email Address :</h4>kuldeep0932k@gmail.com
                                </div>
                                <div>
                                    <h4>Phone No :</h4>9882269381
                                </div>
                                <div>
                                    <h4>Address :</h4>Near Sunder Cinema Road, Saproon, Solan 173211(H.P)
                                </div>
                            </div>
                            <div class="profile_btn">
                                <button id="update_btn">Update Profile</button>
                                <button>Remove Account</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="updateform_popup" id="updateform_popup">
            <div class="update_content">
                <div class="update_form">
                    <h2>Update Profile</h2>
                    <i class="fa-solid fa-x close_updateform"></i>
                </div>
                <form action="">
                    <div class="user_pic">
                        <img src=".\assets\images\user.png" alt="user_logo">
                        <a href="#">Upload Image</a>
                        <a href="#">Remove Image</a>
                </div>
                <div class="input_container">
                    <div class="input_box">
                        <label for="firstname">First Name :</label>
                        <input type="text" name="firstName" id="firstname">
                    </div>
                    <div class="input_box">
                        <label for="lastname">Last Name :</label>
                        <input type="text" name="lastName" id="lastname">
                    </div>
                    <div class="input_box">
                        <label for="email">Email Address:</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="input_box">
                        <label for="phone">Phone No :</label>
                        <input type="text" name="phoneNo" id="phone">
                    </div>
                    <div class="input_box address">
                        <label for="address">Address :</label>
                        <textarea name="address" id="address" cols="30" rows="10"></textarea>
                    </div>
                    <div class="input_box address">
                    <div class="profile_btn">
                                <button id="update_profile">Update Profile</button>
                                <button>Remove Account</button>
                            </div>
</div>
</div>
                </form>
            </div>
        </div>
    </div>
    </div>

