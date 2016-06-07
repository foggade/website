---
title: Home

twig_first: true
process:
    twig: true
---
<div class="centeredImage" markdown="1" >
![Logo God's Golden Acre](../images/logo-gga.png)
</div>
# Willkommen auf unserer Website
  
Der gemeinnützige Verein *Freunde von God's Golden Acre Deutschland* will jungen Menschen, insbesondere in Entwicklungsländern wie Südafrika, in Not helfen, die Chance auf Bildung geben und Armut lindern.  
Unser Ziel ist es, vornehmlich junge Menschen in Deutschland für die gesellschaftliche Mitverantwortung und Hilfsbereitschaft gegenüber Menschen in den Entwicklungsländern zu sensibilisieren.

### News
<ul>
{% for post in page.find('/blog').children.order('date', 'desc').slice(0, 15) %}
    {% if post.visible %}
        <li class="recent-posts">
            <strong><a href="{{ post.url }}">{{ post.title }}</a></strong>
        </li>
    {% endif %}
{% endfor %}
</ul>

<a class="button" href="news"><i class="fa fa-newspaper-o"></i> Alle Neuigkeiten</a>