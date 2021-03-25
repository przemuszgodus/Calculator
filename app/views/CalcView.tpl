
{extends file="main.tpl"}

{block name=content}

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
                    <p>Basic Credit Calculator Step-4</p>
                </header>
                <a href="#work" class="jumplink pic">
                    <span class="arrow icon solid fa-chevron-right"></span>

                </a>
            </article>

            <!-- Work -->
            <article id="work" class="panel">
                <header>
                    <h2>Kalkulator kredytowy</h2>
                </header>
                <p>
                    po wprowadzeniu kwoty kredytu, czasu spłaty i oprocentowania, zwróci kwote pojedynczej raty.
                </p>
                <section>
                    <div class="row">
                        <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
                            <form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute#work" method="post">
                                <fieldset>

                                    <label for="kwota">Kwota</label>
                                    <input id="kwota" type="text" placeholder="Kwota kredytu" name="kwota" value="{$form->kwota}">

                                    <label for="lata">Lata</label>
                                    <input id="lata" type="text" placeholder="Lata kredytu" name="lata" value="{$form->lata}">

                                    <label for="procent">Oprocentowanie</label>
                                    <input id="procent" type="text" placeholder="Podaj oprocentowanie" name="procent" value="{$form->procent}">

                                    <button type="submit" class="pure-button">Oblicz</button>
                                </fieldset>
                            </form>
                        </div>

                        <div class="l-box-lrg pure-u-1 pure-u-med-3-5">


                            {if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

                            

                           {if isset($res->result)}
                                <h4>Wynik</h4>
                                <p class="result">
                                    {$res->result}
                                </p>
                            {/if}

                        </div>


                    </div>
                </section>
            </article>

            <!-- Contact -->


        </div>

        <!-- Footer -->
        <div id="footer">
            <ul class="copyright">
                <li>Footer... Step 4</li>
            </ul>
        </div>

    </div>
{/block}