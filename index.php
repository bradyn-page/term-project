nav {
    border-style: dashed;
}

/*nav li{
    display: inline-block;
    margin: 5px;
}

nav img{
    border-radius: 20px;  
    border-style:dashed;
    border-color: red;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  
nav li a {
    display: block;
    color: grey;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
nav li a:hover {
    background-color: #111;
  }
*/
nav {
display: flex;
position: sticky;
align-items: center;
justify-content: space-between;
top: 0px;
background: rgba(0, 0, 0, 0.6);
background-size: cover;
color: white;
padding: 10px 20px;

}

nav-list {
    display: flex;
    list-style: none;
}
.nav-list li {
    margin-right: 20px;
}
.nav-list li a:hover {
    color: #ffd700;
    /* Change the color on hover */
}
.nav-list li:last-child {
    margin-right: 0;
}

.nav-list li a {
    text-decoration: none;
    color: white;
    font-size: 18px;
    transition: color 0.3s ease-in-out;
}

.nav-list li a:hover {
    color: #ffd700;
    /* Change the color on hover */
}

