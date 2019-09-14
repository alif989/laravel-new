@extends('layouts.app')
@section('content')


        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Grid Options - based on Bootstrap Grid system overview</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Layout</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Grid Opons</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Grid options</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#" class="dropdown-item">Config option 1</a>
                                    </li>
                                    <li><a href="#" class="dropdown-item">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <p>While Bootstrap uses ems or rems for defining most sizes, pxs are used for grid breakpoints and container widths. This is because the viewport width is in pixels and does not change with the font size.

                                See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th class="text-center">
                                            Extra small<br>
                                            <small>&lt;576px</small>
                                        </th>
                                        <th class="text-center">
                                            Small<br>
                                            <small>≥576px</small>
                                        </th>
                                        <th class="text-center">
                                            Medium<br>
                                            <small>≥768px</small>
                                        </th>
                                        <th class="text-center">
                                            Large<br>
                                            <small>≥992px</small>
                                        </th>
                                        <th class="text-center">
                                            Extra large<br>
                                            <small>≥1200px</small>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Max container width</th>
                                        <td>None (auto)</td>
                                        <td>540px</td>
                                        <td>720px</td>
                                        <td>960px</td>
                                        <td>1140px</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Class prefix</th>
                                        <td><code>.col-</code></td>
                                        <td><code>.col-sm-</code></td>
                                        <td><code>.col-md-</code></td>
                                        <td><code>.col-lg-</code></td>
                                        <td><code>.col-xl-</code></td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row"># of columns</th>
                                        <td colspan="5">12</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Gutter width</th>
                                        <td colspan="5">30px (15px on each side of a column)</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Nestable</th>
                                        <td colspan="5">Yes</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Column ordering</th>
                                        <td colspan="5">Yes</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p>Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, applying any
                                <code>.col-md-</code> class to an element will not only affect its styling on medium devices but also on large devices if a
                                <code>.col-lg-</code> class is not present.</p>

                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>How it works</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#" class="dropdown-item">Config option 1</a>
                                    </li>
                                    <li><a href="#" class="dropdown-item">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <p>
                                How it works
                                Bootstrap’s grid system uses a series of containers, rows, and columns to layout and align content. It’s built with flexbox and is fully responsive. Below is an example and an in-depth look at how the grid comes together.</p>
                            <div class="show-grid container-fluid">
                                <div class="row">
                                    <div class="col-sm">
                                        One of three columns
                                    </div>
                                    <div class="col-sm">
                                        One of three columns
                                    </div>
                                    <div class="col-sm">
                                        One of three columns
                                    </div>
                                </div>
                            </div>
                            <pre>
&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-sm"&gt;
            One of three columns
        &lt;/div&gt;
        &lt;div class="col-sm"&gt;
            One of three columns
        &lt;/div&gt;
        &lt;div class="col-sm"&gt;
            One of three columns
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>

                            <p>The above example creates three equal-width columns on small, medium, large, and extra large devices using our predefined grid classes. Those columns are centered in the page with the parent <code>.container</code>.</p>
                            <p>Breaking it down, here’s how it works:</p>
                            <ul>
                                <li>Containers provide a means to center and horizontally pad your site’s contents. Use <code>.container</code> for a responsive pixel width or <code>.container-fluid</code> for <code>width: 100%</code> across all viewport and device sizes.</li>
                                <li>Rows are wrappers for columns. Each column has horizontal <code>padding</code> (called a gutter) for controlling the space between them. This <code>padding</code> is then counteracted on the rows with negative margins. This way, all the content in your columns is visually aligned down the left side.</li>
                                <li>In a grid layout, content must be placed within columns and only columns may be immediate children of rows.</li>
                                <li>Thanks to flexbox, grid columns without a specified <code>width</code> will automatically layout as equal width columns. For example, four instances of <code>.col-sm</code> will each automatically be 25% wide from the small breakpoint and up. See the <a href="http://getbootstrap.com/docs/4.1/layout/grid/#auto-layout-columns">auto-layout columns</a> section for more examples.</li>
                                <li>Column classes indicate the number of columns you’d like to use out of the possible 12 per row. So, if you want three equal-width columns across, you can use <code>.col-4</code>.</li>
                                <li>Column <code>width</code>s are set in percentages, so they’re always fluid and sized relative to their parent element.</li>
                                <li>Columns have horizontal <code>padding</code> to create the gutters between individual columns, however, you can remove the <code>margin</code> from rows and <code>padding</code> from columns with <code>.no-gutters</code> on the <code>.row</code>.</li>
                                <li>To make the grid responsive, there are five grid breakpoints, one for each <a href="http://getbootstrap.com/docs/4.1/layout/overview/#responsive-breakpoints">responsive breakpoint</a>: all breakpoints (extra small), small, medium, large, and extra large.</li>
                                <li>Grid breakpoints are based on minimum width media queries, meaning <strong>they apply to that one breakpoint and all those above it</strong> (e.g., <code>.col-sm-4</code> applies to small, medium, large, and extra large devices, but not the first <code>xs</code> breakpoint).</li>
                                <li>You can use predefined grid classes (like <code>.col-4</code>) or Sass mixins for more semantic markup.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="ibox">
                        <div class="ibox-content">
                            <h2>Full documentation presenting all available options and examples you can find on: <a target="_blank" href="http://getbootstrap.com/docs/4.1/layout/grid/">http://getbootstrap.com/docs/4.1/layout/grid/</a></h2>
                        </div>
                        <div class="ibox-footer">
                            Bootstrap version 4.1
                        </div>
                    </div>


                </div>

            </div>


        </div>
        <div class="footer">
            <div class="float-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2018
            </div>
        </div>

@endsection