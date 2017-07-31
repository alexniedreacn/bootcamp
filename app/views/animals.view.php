{% include 'header.php' %}

<ul>
{% for animal in animals %}
    <li>A {{ color }} {{ animal.name }}</li>
{% endfor %}
</ul>

{% include 'footer.php' %}