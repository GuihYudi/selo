<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style_v2.css">
    <link rel="icon" href="../../_img/icon.png" type="image/png">
    <title>SimuladorV2</title>
</head>
<body>
<div class="cabecalho">
        <div class="logo">
            <img src="../../_img/logo.png" alt="Logo">
        </div>
        <div class="title">
            <h1>Bem vindo ao Simulador</h1>
        </div>
        <div class="logout">
            <img src="../../_img/logout.png" alt="logout">
            <a href="../logout.php" rel="noopener noreferrer" onclick="<?session_destroy();?>">Logout</a>
        </div>
</div>
        <div class="armacao">
            <form method="POST" action="../calculos.php">
            <h3>Dados da Armação</h3>
                <div class="card">
                    <div class="row">
                        <label for="tipo">TIPO</label>
                        <select name="tipo" id="tipo">
                            <option value="none"></option>
                            <option value="acetato">Acetato</option>
                            <option value="metal">Metal</option>
                            <option value="nylon">Fio de Nylon</option>
                            <option value="seguranca">Segurança</option>
                            <option value="parafuso">Parafuso</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for="ponte">PONTE</label>
                        <select name="ponte" id="ponte">
                            <option value="none"></option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for="mha">MHA</label>
                        <select name="mha" id="mha">
                            <option value="none"></option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option><option value='51'>51</option><option value='52'>52</option><option value='53'>53</option><option value='54'>54</option><option value='55'>55</option><option value='56'>56</option><option value='57'>57</option><option value='58'>58</option><option value='59'>59</option><option value='60'>60</option><option value='61'>61</option><option value='62'>62</option><option value='63'>63</option><option value='64'>64</option><option value='65'>65</option><option value='66'>66</option><option value='67'>67</option><option value='68'>68</option><option value='69'>69</option><option value='70'>70</option><option value='71'>71</option><option value='72'>72</option><option value='73'>73</option><option value='74'>74</option><option value='75'>75</option><option value='76'>76</option><option value='77'>77</option><option value='78'>78</option><option value='79'>79</option><option value='80'>80</option><option value='81'>81</option><option value='82'>82</option><option value='83'>83</option><option value='84'>84</option><option value='85'>85</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for="mva">MVA</label>
                        <select name="mva" id="mva">
                            <option value="none"></option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option><option value='51'>51</option><option value='52'>52</option><option value='53'>53</option><option value='54'>54</option><option value='55'>55</option><option value='56'>56</option><option value='57'>57</option><option value='58'>58</option><option value='59'>59</option><option value='60'>60</option><option value='61'>61</option><option value='62'>62</option><option value='63'>63</option><option value='64'>64</option><option value='65'>65</option><option value='66'>66</option><option value='67'>67</option><option value='68'>68</option><option value='69'>69</option><option value='70'>70</option><option value='71'>71</option><option value='72'>72</option><option value='73'>73</option><option value='74'>74</option><option value='75'>75</option><option value='76'>76</option><option value='77'>77</option><option value='78'>78</option><option value='79'>79</option><option value='80'>80</option><option value='81'>81</option><option value='82'>82</option><option value='83'>83</option><option value='84'>84</option><option value='85'>85</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for="dma">DMA</label>
                        <select name="dma" id="dma">
                            <option value="none"></option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option><option value='51'>51</option><option value='52'>52</option><option value='53'>53</option><option value='54'>54</option><option value='55'>55</option><option value='56'>56</option><option value='57'>57</option><option value='58'>58</option><option value='59'>59</option><option value='60'>60</option><option value='61'>61</option><option value='62'>62</option><option value='63'>63</option><option value='64'>64</option><option value='65'>65</option><option value='66'>66</option><option value='67'>67</option><option value='68'>68</option><option value='69'>69</option><option value='70'>70</option><option value='71'>71</option><option value='72'>72</option><option value='73'>73</option><option value='74'>74</option><option value='75'>75</option><option value='76'>76</option><option value='77'>77</option><option value='78'>78</option><option value='79'>79</option><option value='80'>80</option><option value='81'>81</option><option value='82'>82</option><option value='83'>83</option><option value='84'>84</option><option value='85'>85</option>
                        </select>
                    </div>
                </div>
        </div>
            <div class="lentes">
                <div class="oe">
                    <h3>Lente Olho Esquerdo</h3>
                    <div class="card1">
                        <div class="row">
                            <label for="material">MATERIAL</label>
                            <select name="material" id="material"><option value ="none"></option><option value ="cr">CR39 1.49</option><option value ="trivex">TRIVEX 1.53</option><option value ="poly">POLY 1.59</option><option value ="1.60">RES. 1.60</option><option value ="1.67">RES. 1.67</option><option value ="1.74">RES. 1.74</option>
                            </select>
                        </div>
                        <div class="row">
                            <label for="dnp">DNP</label>
                            <select name="dnpoe" id="dnpoe"><option value="none"></option><option value="20">20</option><option value="20.5">20.5</option><option value="21">21</option><option value="21.5">21.5</option><option value="22">22</option><option value="22.5">22.5</option><option value="23">23</option><option value="23.5">23.5</option><option value="24">24</option><option value="24.5">24.5</option><option value="25">25</option><option value="25.5">25.5</option><option value="26">26</option><option value="26.5">26.5</option><option value="27">27</option><option value="27.5">27.5</option><option value="28">28</option><option value="28.5">28.5</option><option value="29">29</option><option value="29.5">29.5</option><option value="30">30</option><option value="30.5">30.5</option><option value="31">31</option><option value="31.5">31.5</option><option value="32">32</option><option value="32.5">32.5</option><option value="33">33</option><option value="33.5">33.5</option><option value="34">34</option><option value="34.5">34.5</option><option value="35">35</option><option value="35.5">35.5</option><option value="36">36</option><option value="36.5">36.5</option><option value="37">37</option><option value="37.5">37.5</option><option value="38">38</option><option value="38.5">38.5</option><option value="39">39</option><option value="39.5">39.5</option><option value="40">40</option><option value="40.5">40.5</option>
                            </select>
                        </div>
                        <div class="row">
                            <label for="esf">ESFÉRICO</label>
                            <select name="esfoe" id="esfoe"><option value='-30.00'>-30.00</option><option value='-29.75'>-29.75</option><option value='-29.50'>-29.50</option><option value='-29.25'>-29.25</option><option value='-29.00'>-29.00</option><option value='-28.75'>-28.75</option><option value='-28.50'>-28.50</option><option value='-28.25'>-28.25</option><option value='-28.00'>-28.00</option><option value='-27.75'>-27.75</option><option value='-27.50'>-27.50</option><option value='-27.25'>-27.25</option><option value='-27.00'>-27.00</option><option value='-26.75'>-26.75</option><option value='-26.50'>-26.50</option><option value='-26.25'>-26.25</option><option value='-26.00'>-26.00</option><option value='-25.75'>-25.75</option><option value='-25.50'>-25.50</option><option value='-25.25'>-25.25</option><option value='-25.00'>-25.00</option><option value='-24.75'>-24.75</option><option value='-24.50'>-24.50</option><option value='-24.25'>-24.25</option><option value='-24.00'>-24.00</option><option value='-23.75'>-23.75</option><option value='-23.50'>-23.50</option><option value='-23.25'>-23.25</option><option value='-23.00'>-23.00</option><option value='-22.75'>-22.75</option><option value='-22.50'>-22.50</option><option value='-22.25'>-22.25</option><option value='-22.00'>-22.00</option><option value='-21.75'>-21.75</option><option value='-21.50'>-21.50</option><option value='-21.25'>-21.25</option><option value='-21.00'>-21.00</option><option value='-20.75'>-20.75</option><option value='-20.50'>-20.50</option><option value='-20.25'>-20.25</option><option value='-29.00'>-29.00</option><option value='-19.75'>-19.75</option><option value='-19.50'>-19.50</option><option value='-19.25'>-19.25</option><option value='-19.00'>-19.00</option><option value='-18.75'>-18.75</option><option value='-18.50'>-18.50</option><option value='-18.25'>-18.25</option><option value='-18.00'>-18.00</option><option value='-17.75'>-17.75</option><option value='-17.50'>-17.50</option><option value='-17.25'>-17.25</option><option value='-17.00'>-17.00</option><option value='-16.75'>-16.75</option><option value='-16.50'>-16.50</option><option value='-16.25'>-16.25</option><option value='-16.00'>-16.00</option><option value='-15.75'>-15.75</option><option value='-15.50'>-15.50</option><option value='-15.25'>-15.25</option><option value='-15.00'>-15.00</option><option value='-14.75'>-14.75</option><option value='-14.50'>-14.50</option><option value='-14.25'>-14.25</option><option value='-14.00'>-14.00</option><option value='-13.75'>-13.75</option><option value='-13.50'>-13.50</option><option value='-13.25'>-13.25</option><option value='-13.00'>-13.00</option><option value='-12.75'>-12.75</option><option value='-12.50'>-12.50</option><option value='-12.25'>-12.25</option><option value='-12.00'>-12.00</option><option value='-11.75'>-11.75</option><option value='-11.50'>-11.50</option><option value='-11.25'>-11.25</option><option value='-11.00'>-11.00</option><option value='-10.75'>-10.75</option><option value='-10.50'>-10.50</option><option value='-10.25'>-10.25</option><option value='-10.00'>-10.00</option><option value='-9.75'>-9.75</option><option value='-9.50'>-9.50</option><option value='-9.25'>-9.25</option><option value='-9.00'>-9.00</option><option value='-8.75'>-8.75</option><option value='-8.50'>-8.50</option><option value='-8.25'>-8.25</option><option value='-8.00'>-8.00</option><option value='-7.75'>-7.75</option><option value='-7.50'>-7.50</option><option value='-7.25'>-7.25</option><option value='-7.00'>-7.00</option><option value='-6.75'>-6.75</option><option value='-6.50'>-6.50</option><option value='-6.25'>-6.25</option><option value='-6.00'>-6.00</option><option value='-5.75'>-5.75</option><option value='-5.50'>-5.50</option><option value='-5.25'>-5.25</option><option value='-5.00'>-5.00</option><option value='-4.75'>-4.75</option><option value='-4.50'>-4.50</option><option value='-4.25'>-4.25</option><option value='-4.00'>-4.00</option><option value='-3.75'>-3.75</option><option value='-3.50'>-3.50</option><option value='-3.25'>-3.25</option><option value='-3.00'>-3.00</option><option value='-2.75'>-2.75</option><option value='-2.50'>-2.50</option><option value='-2.25'>-2.25</option><option value='-2.00'>-2.00</option><option value='-1.75'>-1.75</option><option value='-1.50'>-1.50</option><option value='-1.25'>-1.25</option><option value='-1.00'>-1.00</option><option value='-0.75'>-0.75</option><option value='-0.50'>-0.50</option><option value='-0.25'>-0.25</option><option value='0.00'selected>0.00</option><option value='0.25'>0.25</option><option value='0.50'>0.50</option><option value='0.75'>0.75</option><option value='1.00'>1.00</option><option value='1.25'>1.25</option><option value='1.50'>1.50</option><option value='1.75'>1.75</option><option value='2.00'>2.00</option><option value='2.25'>2.25</option><option value='2.50'>2.50</option><option value='2.75'>2.75</option><option value='3.00'>3.00</option><option value='3.25'>3.25</option><option value='3.50'>3.50</option><option value='3.75'>3.75</option><option value='4.00'>4.00</option><option value='4.25'>4.25</option><option value='4.50'>4.50</option><option value='4.75'>4.75</option><option value='5.00'>5.00</option><option value='5.25'>5.25</option><option value='5.50'>5.50</option><option value='5.75'>5.75</option><option value='6.00'>6.00</option><option value='6.25'>6.25</option><option value='6.50'>6.50</option><option value='6.75'>6.75</option><option value='7.00'>7.00</option><option value='7.25'>7.25</option><option value='7.50'>7.50</option><option value='7.75'>7.75</option><option value='8.00'>8.00</option><option value='8.25'>8.25</option><option value='8.50'>8.50</option><option value='8.75'>8.75</option><option value='9.00'>9.00</option><option value='9.25'>9.25</option><option value='9.50'>9.50</option><option value='9.75'>9.75</option><option value='10.00'>10.00</option><option value='10.25'>10.25</option><option value='10.50'>10.50</option><option value='10.75'>10.75</option><option value='11.00'>11.00</option><option value='11.25'>11.25</option><option value='11.50'>11.50</option><option value='11.75'>11.75</option><option value='12.00'>12.00</option><option value='12.25'>12.25</option><option value='12.50'>12.50</option><option value='12.75'>12.75</option><option value='13.00'>13.00</option><option value='13.25'>13.25</option><option value='13.50'>13.50</option><option value='13.75'>13.75</option><option value='14.00'>14.00</option><option value='14.25'>14.25</option><option value='14.50'>14.50</option><option value='14.75'>14.75</option><option value='15.00'>15.00</option><option value='15.25'>15.25</option><option value='15.50'>15.50</option><option value='15.75'>15.75</option><option value='16.00'>16.00</option><option value='16.25'>16.25</option><option value='16.50'>16.50</option><option value='16.75'>16.75</option><option value='17.00'>17.00</option><option value='17.25'>17.25</option><option value='17.50'>17.50</option><option value='17.75'>17.75</option><option value='18.00'>18.00</option><option value='18.25'>18.25</option><option value='18.50'>18.50</option><option value='18.75'>18.75</option><option value='19.00'>19.00</option><option value='19.25'>19.25</option><option value='19.50'>19.50</option><option value='19.75'>19.75</option><option value='20.00'>20.00</option><option value='20.25'>20.25</option><option value='20.50'>20.50</option><option value='20.75'>20.75</option><option value='21.00'>21.00</option><option value='21.25'>21.25</option><option value='21.50'>21.50</option><option value='21.75'>21.75</option><option value='22.00'>22.00</option><option value='22.25'>22.25</option><option value='22.50'>22.50</option><option value='22.75'>22.75</option><option value='23.00'>23.00</option><option value='23.25'>23.25</option><option value='23.50'>23.50</option><option value='23.75'>23.75</option><option value='24.00'>24.00</option><option value='24.25'>24.25</option><option value='24.50'>24.50</option><option value='24.75'>24.75</option><option value='25.00'>25.00</option><option value='25.25'>25.25</option><option value='25.50'>25.50</option><option value='25.75'>25.75</option><option value='26.00'>26.00</option><option value='26.25'>26.25</option><option value='26.50'>26.50</option><option value='26.75'>26.75</option><option value='27.00'>27.00</option><option value='27.25'>27.25</option><option value='27.50'>27.50</option><option value='27.75'>27.75</option><option value='28.00'>28.00</option><option value='28.25'>28.25</option><option value='28.50'>28.50</option><option value='28.75'>28.75</option><option value='29.00'>29.00</option><option value='29.25'>29.25</option><option value='29.50'>29.50</option><option value='29.75'>29.75</option><option value='30.00'>30.00</option></select>
                        </div>
                        <div class="row">
                            <label for="cil">CILÍNDRICO</label>
                            <select name="ciloe" id="ciloe">
                                 <option value='-12.00'>-12.00</option><option value='-11.75'>-11.75</option><option value='-11.50'>-11.50</option><option value='-11.25'>-11.25</option><option value='-11.00'>-11.00</option><option value='-10.75'>-10.75</option><option value='-10.50'>-10.50</option><option value='-10.25'>-10.25</option><option value='-10.00'>-10.00</option><option value='-9.75'>-9.75</option><option value='-9.50'>-9.50</option><option value='-9.25'>-9.25</option><option value='-9.00'>-9.00</option><option value='-8.75'>-8.75</option><option value='-8.50'>-8.50</option><option value='-8.25'>-8.25</option><option value='-8.00'>-8.00</option><option value='-7.75'>-7.75</option><option value='-7.50'>-7.50</option><option value='-7.25'>-7.25</option><option value='-7.00'>-7.00</option><option value='-6.75'>-6.75</option><option value='-6.50'>-6.50</option><option value='-6.25'>-6.25</option><option value='-6.00'>-6.00</option><option value='-5.75'>-5.75</option><option value='-5.50'>-5.50</option><option value='-5.25'>-5.25</option><option value='-5.00'>-5.00</option><option value='-4.75'>-4.75</option><option value='-4.50'>-4.50</option><option value='-4.25'>-4.25</option><option value='-4.00'>-4.00</option><option value='-3.75'>-3.75</option><option value='-3.50'>-3.50</option><option value='-3.25'>-3.25</option><option value='-3.00'>-3.00</option><option value='-2.75'>-2.75</option><option value='-2.50'>-2.50</option><option value='-2.25'>-2.25</option><option value='-2.00'>-2.00</option><option value='-1.75'>-1.75</option><option value='-1.50'>-1.50</option><option value='-1.25'>-1.25</option><option value='-1.00'>-1.00</option><option value='-0.75'>-0.75</option><option value='-0.50'>-0.50</option><option value='-0.25'>-0.25</option><option value='0.00'selected>0.00</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="image">
                    <img src="../../_img/modelo de medidas.png" alt="modelinho">
                </div>
                <div class="od">
                    <h3>Lente Olho Direito</h3>
                    <div class="card1">
                        <div class="row">
                            <label for="material">MATERIAL</label>
                            <select name="material" id="material"><option value ="none"></option><option value ="cr">CR39 1.49</option><option value ="trivex">TRIVEX 1.53</option><option value ="poly">POLY 1.59</option><option value ="1.60">RES. 1.60</option><option value ="1.67">RES. 1.67</option><option value ="1.74">RES. 1.74</option>
                            </select>
                        </div>
                        <div class="row">
                            <label for="dnp">DNP</label>
                            <select name="dnpod" id="dnpod"><option value="none"></option><option value="20">20</option><option value="20.5">20.5</option><option value="21">21</option><option value="21.5">21.5</option><option value="22">22</option><option value="22.5">22.5</option><option value="23">23</option><option value="23.5">23.5</option><option value="24">24</option><option value="24.5">24.5</option><option value="25">25</option><option value="25.5">25.5</option><option value="26">26</option><option value="26.5">26.5</option><option value="27">27</option><option value="27.5">27.5</option><option value="28">28</option><option value="28.5">28.5</option><option value="29">29</option><option value="29.5">29.5</option><option value="30">30</option><option value="30.5">30.5</option><option value="31">31</option><option value="31.5">31.5</option><option value="32">32</option><option value="32.5">32.5</option><option value="33">33</option><option value="33.5">33.5</option><option value="34">34</option><option value="34.5">34.5</option><option value="35">35</option><option value="35.5">35.5</option><option value="36">36</option><option value="36.5">36.5</option><option value="37">37</option><option value="37.5">37.5</option><option value="38">38</option><option value="38.5">38.5</option><option value="39">39</option><option value="39.5">39.5</option><option value="40">40</option><option value="40.5">40.5</option>
                            </select>
                        </div>
                        <div class="row">
                            <label for="esf">ESFÉRICO</label>
                            <select name="esfod" id="esfod"><option value='-30.00'>-30.00</option><option value='-29.75'>-29.75</option><option value='-29.50'>-29.50</option><option value='-29.25'>-29.25</option><option value='-29.00'>-29.00</option><option value='-28.75'>-28.75</option><option value='-28.50'>-28.50</option><option value='-28.25'>-28.25</option><option value='-28.00'>-28.00</option><option value='-27.75'>-27.75</option><option value='-27.50'>-27.50</option><option value='-27.25'>-27.25</option><option value='-27.00'>-27.00</option><option value='-26.75'>-26.75</option><option value='-26.50'>-26.50</option><option value='-26.25'>-26.25</option><option value='-26.00'>-26.00</option><option value='-25.75'>-25.75</option><option value='-25.50'>-25.50</option><option value='-25.25'>-25.25</option><option value='-25.00'>-25.00</option><option value='-24.75'>-24.75</option><option value='-24.50'>-24.50</option><option value='-24.25'>-24.25</option><option value='-24.00'>-24.00</option><option value='-23.75'>-23.75</option><option value='-23.50'>-23.50</option><option value='-23.25'>-23.25</option><option value='-23.00'>-23.00</option><option value='-22.75'>-22.75</option><option value='-22.50'>-22.50</option><option value='-22.25'>-22.25</option><option value='-22.00'>-22.00</option><option value='-21.75'>-21.75</option><option value='-21.50'>-21.50</option><option value='-21.25'>-21.25</option><option value='-21.00'>-21.00</option><option value='-20.75'>-20.75</option><option value='-20.50'>-20.50</option><option value='-20.25'>-20.25</option><option value='-29.00'>-29.00</option><option value='-19.75'>-19.75</option><option value='-19.50'>-19.50</option><option value='-19.25'>-19.25</option><option value='-19.00'>-19.00</option><option value='-18.75'>-18.75</option><option value='-18.50'>-18.50</option><option value='-18.25'>-18.25</option><option value='-18.00'>-18.00</option><option value='-17.75'>-17.75</option><option value='-17.50'>-17.50</option><option value='-17.25'>-17.25</option><option value='-17.00'>-17.00</option><option value='-16.75'>-16.75</option><option value='-16.50'>-16.50</option><option value='-16.25'>-16.25</option><option value='-16.00'>-16.00</option><option value='-15.75'>-15.75</option><option value='-15.50'>-15.50</option><option value='-15.25'>-15.25</option><option value='-15.00'>-15.00</option><option value='-14.75'>-14.75</option><option value='-14.50'>-14.50</option><option value='-14.25'>-14.25</option><option value='-14.00'>-14.00</option><option value='-13.75'>-13.75</option><option value='-13.50'>-13.50</option><option value='-13.25'>-13.25</option><option value='-13.00'>-13.00</option><option value='-12.75'>-12.75</option><option value='-12.50'>-12.50</option><option value='-12.25'>-12.25</option><option value='-12.00'>-12.00</option><option value='-11.75'>-11.75</option><option value='-11.50'>-11.50</option><option value='-11.25'>-11.25</option><option value='-11.00'>-11.00</option><option value='-10.75'>-10.75</option><option value='-10.50'>-10.50</option><option value='-10.25'>-10.25</option><option value='-10.00'>-10.00</option><option value='-9.75'>-9.75</option><option value='-9.50'>-9.50</option><option value='-9.25'>-9.25</option><option value='-9.00'>-9.00</option><option value='-8.75'>-8.75</option><option value='-8.50'>-8.50</option><option value='-8.25'>-8.25</option><option value='-8.00'>-8.00</option><option value='-7.75'>-7.75</option><option value='-7.50'>-7.50</option><option value='-7.25'>-7.25</option><option value='-7.00'>-7.00</option><option value='-6.75'>-6.75</option><option value='-6.50'>-6.50</option><option value='-6.25'>-6.25</option><option value='-6.00'>-6.00</option><option value='-5.75'>-5.75</option><option value='-5.50'>-5.50</option><option value='-5.25'>-5.25</option><option value='-5.00'>-5.00</option><option value='-4.75'>-4.75</option><option value='-4.50'>-4.50</option><option value='-4.25'>-4.25</option><option value='-4.00'>-4.00</option><option value='-3.75'>-3.75</option><option value='-3.50'>-3.50</option><option value='-3.25'>-3.25</option><option value='-3.00'>-3.00</option><option value='-2.75'>-2.75</option><option value='-2.50'>-2.50</option><option value='-2.25'>-2.25</option><option value='-2.00'>-2.00</option><option value='-1.75'>-1.75</option><option value='-1.50'>-1.50</option><option value='-1.25'>-1.25</option><option value='-1.00'>-1.00</option><option value='-0.75'>-0.75</option><option value='-0.50'>-0.50</option><option value='-0.25'>-0.25</option><option value='0.00'selected>0.00</option><option value='0.25'>0.25</option><option value='0.50'>0.50</option><option value='0.75'>0.75</option><option value='1.00'>1.00</option><option value='1.25'>1.25</option><option value='1.50'>1.50</option><option value='1.75'>1.75</option><option value='2.00'>2.00</option><option value='2.25'>2.25</option><option value='2.50'>2.50</option><option value='2.75'>2.75</option><option value='3.00'>3.00</option><option value='3.25'>3.25</option><option value='3.50'>3.50</option><option value='3.75'>3.75</option><option value='4.00'>4.00</option><option value='4.25'>4.25</option><option value='4.50'>4.50</option><option value='4.75'>4.75</option><option value='5.00'>5.00</option><option value='5.25'>5.25</option><option value='5.50'>5.50</option><option value='5.75'>5.75</option><option value='6.00'>6.00</option><option value='6.25'>6.25</option><option value='6.50'>6.50</option><option value='6.75'>6.75</option><option value='7.00'>7.00</option><option value='7.25'>7.25</option><option value='7.50'>7.50</option><option value='7.75'>7.75</option><option value='8.00'>8.00</option><option value='8.25'>8.25</option><option value='8.50'>8.50</option><option value='8.75'>8.75</option><option value='9.00'>9.00</option><option value='9.25'>9.25</option><option value='9.50'>9.50</option><option value='9.75'>9.75</option><option value='10.00'>10.00</option><option value='10.25'>10.25</option><option value='10.50'>10.50</option><option value='10.75'>10.75</option><option value='11.00'>11.00</option><option value='11.25'>11.25</option><option value='11.50'>11.50</option><option value='11.75'>11.75</option><option value='12.00'>12.00</option><option value='12.25'>12.25</option><option value='12.50'>12.50</option><option value='12.75'>12.75</option><option value='13.00'>13.00</option><option value='13.25'>13.25</option><option value='13.50'>13.50</option><option value='13.75'>13.75</option><option value='14.00'>14.00</option><option value='14.25'>14.25</option><option value='14.50'>14.50</option><option value='14.75'>14.75</option><option value='15.00'>15.00</option><option value='15.25'>15.25</option><option value='15.50'>15.50</option><option value='15.75'>15.75</option><option value='16.00'>16.00</option><option value='16.25'>16.25</option><option value='16.50'>16.50</option><option value='16.75'>16.75</option><option value='17.00'>17.00</option><option value='17.25'>17.25</option><option value='17.50'>17.50</option><option value='17.75'>17.75</option><option value='18.00'>18.00</option><option value='18.25'>18.25</option><option value='18.50'>18.50</option><option value='18.75'>18.75</option><option value='19.00'>19.00</option><option value='19.25'>19.25</option><option value='19.50'>19.50</option><option value='19.75'>19.75</option><option value='20.00'>20.00</option><option value='20.25'>20.25</option><option value='20.50'>20.50</option><option value='20.75'>20.75</option><option value='21.00'>21.00</option><option value='21.25'>21.25</option><option value='21.50'>21.50</option><option value='21.75'>21.75</option><option value='22.00'>22.00</option><option value='22.25'>22.25</option><option value='22.50'>22.50</option><option value='22.75'>22.75</option><option value='23.00'>23.00</option><option value='23.25'>23.25</option><option value='23.50'>23.50</option><option value='23.75'>23.75</option><option value='24.00'>24.00</option><option value='24.25'>24.25</option><option value='24.50'>24.50</option><option value='24.75'>24.75</option><option value='25.00'>25.00</option><option value='25.25'>25.25</option><option value='25.50'>25.50</option><option value='25.75'>25.75</option><option value='26.00'>26.00</option><option value='26.25'>26.25</option><option value='26.50'>26.50</option><option value='26.75'>26.75</option><option value='27.00'>27.00</option><option value='27.25'>27.25</option><option value='27.50'>27.50</option><option value='27.75'>27.75</option><option value='28.00'>28.00</option><option value='28.25'>28.25</option><option value='28.50'>28.50</option><option value='28.75'>28.75</option><option value='29.00'>29.00</option><option value='29.25'>29.25</option><option value='29.50'>29.50</option><option value='29.75'>29.75</option><option value='30.00'>30.00</option></select>
                        </div>
                        <div class="row">
                            <label for="cil">CILÍNDRICO</label>
                            <select name="cilod" id="cilod">
                                 <option value='-12.00'>-12.00</option><option value='-11.75'>-11.75</option><option value='-11.50'>-11.50</option><option value='-11.25'>-11.25</option><option value='-11.00'>-11.00</option><option value='-10.75'>-10.75</option><option value='-10.50'>-10.50</option><option value='-10.25'>-10.25</option><option value='-10.00'>-10.00</option><option value='-9.75'>-9.75</option><option value='-9.50'>-9.50</option><option value='-9.25'>-9.25</option><option value='-9.00'>-9.00</option><option value='-8.75'>-8.75</option><option value='-8.50'>-8.50</option><option value='-8.25'>-8.25</option><option value='-8.00'>-8.00</option><option value='-7.75'>-7.75</option><option value='-7.50'>-7.50</option><option value='-7.25'>-7.25</option><option value='-7.00'>-7.00</option><option value='-6.75'>-6.75</option><option value='-6.50'>-6.50</option><option value='-6.25'>-6.25</option><option value='-6.00'>-6.00</option><option value='-5.75'>-5.75</option><option value='-5.50'>-5.50</option><option value='-5.25'>-5.25</option><option value='-5.00'>-5.00</option><option value='-4.75'>-4.75</option><option value='-4.50'>-4.50</option><option value='-4.25'>-4.25</option><option value='-4.00'>-4.00</option><option value='-3.75'>-3.75</option><option value='-3.50'>-3.50</option><option value='-3.25'>-3.25</option><option value='-3.00'>-3.00</option><option value='-2.75'>-2.75</option><option value='-2.50'>-2.50</option><option value='-2.25'>-2.25</option><option value='-2.00'>-2.00</option><option value='-1.75'>-1.75</option><option value='-1.50'>-1.50</option><option value='-1.25'>-1.25</option><option value='-1.00'>-1.00</option><option value='-0.75'>-0.75</option><option value='-0.50'>-0.50</option><option value='-0.25'>-0.25</option><option value='0.00'selected>0.00</option>
                            </select>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="calcular">
                <div class="row">
                    <input type="reset" class="button" value="LIMPAR CAMPOS">
                    <input type="submit" class="button" value="CALCULAR">
                </div>
                </form>
            </div>
</body>
</html>