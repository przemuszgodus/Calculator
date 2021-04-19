
{extends file="main.tpl"}

{block name=content}
<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  >wyloguj</a>

</div>



    <!-- Wrapper-->
    <div id="wrapper">

        <!-- Nav -->
        <nav id="nav">
            <a href="#" class="icon solid fa-home"><span>Home</span></a>
            <a href="#work" class="icon solid fa-calculator"><span>Calculator</span></a>

        </nav>

        <!-- Main -->
        <div id="main">

            <!-- Me -->
            <article id="home" class="panel intro">
                <header>
                    <h1>Przemysław Zgoda</h1>
                    <p>Credit Calculator Step-8</p>
                </header>
                <a href="#work" class="jumplink pic">
                    <span class="arrow icon solid fa-chevron-right"></span>

                </a>
            </article>

            <!-- Work -->
           <table class="table result-table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Kwota</th>
                <th scope="col">Lata</th>
                <th scope="col">Procent</th>
                <th scope="col">Rata</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            {foreach $credit as $c}
            
                <tr style="text-align:center;">
                    <td>{$c["idwynik"]}</td>
                    <td>{$c["kwota"]}</td>
                    <td>{$c["lat"]}</td>
                    <td>{$c["procent"]}</td>
                    <td>{$c["rata"]}</td>
                    <td>{$c["data"]}</td>
                </tr>
          
            {/foreach}
        </tbody>
    </table>

            <!-- Contact -->


        </div>

        <!-- Footer -->
        <div id="footer">
            <ul class="copyright">
                <li>Footer... Step 8</li>
            </ul>
        </div>

    </div>
{/block}