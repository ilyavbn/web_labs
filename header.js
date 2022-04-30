const template = document.createElement('template')
template.innerHTML=`
<div class="container">
    <header class="header">
        <div class="header__inner">
            <div class="header__logo"><a href="index.html">NPU</a></div>
            <nav class="nav">
                <a href="#">History</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </nav>
        </div>
    </header>
</div>
`
document.body.appendChild(template.content)
