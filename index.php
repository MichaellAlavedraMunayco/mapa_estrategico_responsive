<?php include('includes/header.php'); ?>


<!-- <div style="width: 100%; display: flex; justify-content: space-between">
  <div id="myDiagramDiv" style="flex-grow: 1; height: 680px; border: solid 1px black"></div>
</div> -->

<div class="container">
  <table>
    <tr>
      <th class="hidden-th"></th>
      <th>
        <div class="tema-estrategico">Tema estratégico 1</div>
      </th>
      <th>
        <div class="tema-estrategico">Tema estratégico 4</div>
      </th>
      <th>
        <div class="tema-estrategico">Tema estratégico 2</div>
      </th>
      <th>
        <div class="tema-estrategico">Tema estratégico 3</div>
      </th>
    </tr>
    <tr>
      <th>
        <div class="perspectiva">Perspecita 1</div>
      </th>
      <td>
        <div id="a" class="objetivo">Objetivo 1</div>
      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th>
        <div class="perspectiva">Perspecita 2</div>
      </th>
      <td></td>
      <td colspan="2">
        <div id="a" class="objetivo">Objetivo 2</div>
      </td>
      <!-- <td></td> -->
      <td></td>
    </tr>
    <tr>
      <th>
        <div class="perspectiva">Perspecita 3</div>
      </th>
      <td rowspan="2"></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th>
        <div class="perspectiva">Perspecita 4</div>
      </th>
      <!-- <td></td> -->
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</div>
<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
  <defs>
    <marker id="arrowhead" viewBox="0 0 10 10" refX="3" refY="5" markerWidth="6" markerHeight="6" orient="auto">
      <path d="M 0 0 L 10 5 L 0 10 z" />
    </marker>
  </defs>
  <g fill="none" stroke="black" stroke-width="2" marker-end="url(#arrowhead)">
    <path id="arrowLeft" />
    <path id="arrowRight" />
  </g>
</svg>
<?php include('includes/footer.php');
