@include('contest.includes.head')

<main id="main-container">

        <ul class="nav nav-pills push col-md-12 col-md-offset-3"  style="padding: 25px 0px;">
            <li >
                <a href="/contest/problemas" >
                    <i class="fa fa-file-code-o"></i>
                    Problemas
                </a>
            </li>
        
            <li>
                <a  href="/contest/envios" >
                    <i class="fa fa-paper-plane-o"></i>
                            Envios
                </a>
            </li>
            <li>
                <a  href="/contest/clarificaciones">
                    <i class="fa fa-weixin"></i>
                            Clarificaciones
                </a>
            </li>
            <li class="active">
                <a  href="/contest/score">
                    <i class="fa fa-trophy"></i>
                            Scoreboard
                </a>
            </li>
        </ul>

        <div class="content">
            <div class="col-lg-12">
                <!-- Contextual Table -->
                <div class="block">
                    <div class="block-content">
                        <table class="table table-borderless">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 20px;">Posición</th>
                                <th class="text-center">Equipo</th>
                                <th class="text-center" style="width: 10%;">Categoría</th>                                                               <th class="text-center" style="width: 10%;">a</th>
                                <th class="text-center" style="width: 10%;">b</th>
                                <th class="text-center" style="width: 10%;">c</th>
                                <th class="text-center" style="width: 10%;">d</th>
                                <th class="text-center" style="width: 10%;">e</th>
                                <th class="text-center" style="width: 10%;">f</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr class="active">
                                <td class="text-center">
                                    <i class="fa fa-trophy" style="font-size: 2em; color: #FFD700;"></i>
                                </td>
                                <td class="text-center">StringTokenizer</td>
                                <td class="text-center"><span class="label label-primary">Senior</span></td>
                                <td class="text-center">
                                    <i class="fa fa-flag" style="font-size: 2em; color: #FF0000;"></i>
                                </td>
                                <td class="text-center">
                                    <i class="fa fa-flag" style="font-size: 2em; color: #0A0B;"></i>                                                     </td>
                                <td class="text-center">
                                    <span class="label label-danger"> 2 intentos </span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-danger"> 1 intento </span>
                                </td>
                                <td class="text-center">
                                    <i class="fa fa-flag" style="font-size: 2em; color: #00BFFF;"></i>
                                </td>
                                <td class="text-center">
                                    <i class="fa fa-flag" style="font-size: 2em; color: #8A2BE2;"></i>
                                </td>
                            </tr>


                            <tr class="active">
                                <td class="text-center">
                                    <i class="fa fa-trophy" style="font-size: 2em; color: #C0C0C0"></i>
                                </td>
                                <td class="text-center">StringTokenizer</td>
                                <td class="text-center"><span class="label label-primary">Senior</span></td>
                                <td class="text-center">
                                    <i class="fa fa-flag" style="font-size: 2em; color: #FF0000;"></i>
                                </td>
                                <td class="text-center">
                                    <i class="fa fa-flag" style="font-size: 2em; color: #0A0B;"></i>                                                     </td>
                                <td class="text-center">
                                    <span class="label label-danger"> 2 intentos </span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-danger"> 1 intento </span>
                                </td>
                                <td class="text-center">
                                    <i class="fa fa-flag" style="font-size: 2em; color: #00BFFF;"></i>
                                </td>
                                <td class="text-center">
                                    <i class="fa fa-flag" style="font-size: 2em; color: #8A2BE2;"></i>
                                </td>
                            </tr>


                            <tr class="active">
                                <td class="text-center">
                                    <i class="fa fa-trophy" style="font-size: 2em; color: #CD853F"></i>
                                </td>
                                <td class="text-center">StringTokenizer</td>
                                <td class="text-center"><span class="label label-primary">Senior</span></td>
                                <td class="text-center">
                                    <i class="fa fa-flag" style="font-size: 2em; color: #FF0000;"></i>
                                </td>
                                <td class="text-center">
                                    <i class="fa fa-flag" style="font-size: 2em; color: #0A0B;"></i>                                                     </td>
                                <td class="text-center">
                                    <span class="label label-danger"> 2 intentos </span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-danger"> 1 intento </span>
                                </td>
                                <td class="text-center">
                                    <i class="fa fa-flag" style="font-size: 2em; color: #00BFFF;"></i>
                                </td>
                                <td class="text-center">
                                    <i class="fa fa-flag" style="font-size: 2em; color: #8A2BE2;"></i>
                                </td>
                            </tr>


                            <tr class="active">
                                <td class="text-center">
                                    4
                                </td>
                                <td class="text-center">StringTokenizer</td>
                                <td class="text-center"><span class="label label-primary">Senior</span></td>
                                <td class="text-center">
                                    <span class="label label-danger"> 4 intentos </span>
                                </td>
                                <td class="text-center">
                                    <i class="fa fa-flag" style="font-size: 2em; color: #0A0B;"></i>                                                     </td>
                                <td class="text-center">
                                    <span class="label label-danger"> 2 intentos </span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-danger"> 4 intentos </span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-danger"> 4 intentos </span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-danger"> 4 intentos </span>
                                </td>
                            </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Contextual Table -->
            </div>
        </div>
</main>
@include('contest.includes.footer')