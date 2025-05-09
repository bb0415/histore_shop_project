<style>
.jua-regular {
  font-family: "Jua", sans-serif;
  font-weight: 400;
  font-style: normal;
}

h1.t {

font-family: "jua";
text-shadow: -2px 0 rgb(0, 0, 0), 0 2px black, 2px 0 black, 0 -2px black;
}

@import url("https://fonts.googleapis.com/css?family=Rubik:700&display=swap");
* {
box-sizing: border-box;
}
*::before, *::after {
box-sizing: border-box;
}
.login-form{
            /* border: 3px solid red; */
            border-radius: 20px;
            width: 300px;
            background-color: #ffe3e2;
            padding:50px;
            margin : 50px auto;
        }


#bt1{

top: 300px;
}
#bt2{

top: 450px;
}
button {
display: inline-block;
cursor: pointer;
outline: none;
border: 0;
vertical-align: middle;
text-decoration: none;
font-size: inherit;

font-family: "jua" 
}
button.learn-more {
height:100px;
width:250px;
font-weight: 600;
color: #382b22;
text-transform: uppercase;
padding: 1.5em 3em;
background: #fff0f0;
border: 2px solid #b18597;
border-radius: 0.75em;
transform-style: preserve-3d;
transition: transform 150ms cubic-bezier(0, 0, 0.58, 1), background 150ms cubic-bezier(0, 0, 0.58, 1);
}
button.learn-more::before {
position: absolute;
content: "";
width: 100%;
height: 100%;
top: 0;
left: 0;
right: 0;
bottom: 0;
background: #f9c4d2;
border-radius: inherit;
box-shadow: 0 0 0 2px #b18597, 0 0.625em 0 0 #ffe3e2;
transform: translate3d(0, 0.75em, -1em);
transition: transform 150ms cubic-bezier(0, 0, 0.58, 1), box-shadow 150ms cubic-bezier(0, 0, 0.58, 1);
}
button.learn-more:hover {
background: #ffe9e9;
transform: translate(0, 0.25em);
}
button.learn-more:hover::before {
box-shadow: 0 0 0 2px #b18597, 0 0.5em 0 0 #ffe3e2;
transform: translate3d(0, 0.5em, -1em);
}
button.learn-more:active {
background: #ffe9e9;
transform: translate(0em, 0.75em);
}
button.learn-more:active::before {
box-shadow: 0 0 0 2px #b18597, 0 0 #ffe3e2;
transform: translate3d(0, 0, -1em);
}
    </style>