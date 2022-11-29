<script type="text/javascript">
document.addEventListener('DOMContentLoaded', () => {
  document.getElementById("get-level-up").addEventListener('click', async (e) => {
    e.preventDefault();
    const response = await fetch("{{ route('randLevelUp') }}");
    const data = await response.json();
    document.getElementById("level").value = data.level;
    document.getElementById("magie").value = data.magie;
    document.getElementById("force").value = data.force;
    document.getElementById("agilite").value = data.agilite;
    document.getElementById("intelligence").value = data.intelligence;
    document.getElementById("vie").value = data.vie;
  });
});
</script>



@if(auth()->check())