		<footer id="site-footer">
			<div class="container">
				
				<?php dynamic_sidebar('Site Footer'); ?>
				
				<div id="footer-links">
					<?php 
						$footer_menus = Array( 'footer-1', 'footer-2', 'footer-3', 'footer-4', 'footer-5' );
						
						foreach ($footer_menus as $footer_menu) :
							if ( has_nav_menu( $footer_menu ) ) : 
								$name = ag_get_menu_name( $footer_menu );
								
								echo '<nav id="menu-'. strtolower($name) .'-container" class="menu">';
								echo '<h5 class="menu-name">'. $name .'</h5>';
								wp_nav_menu( array( 
									'theme_location' => $footer_menu,
									'menu_class' => '',
									'container' => false
								) ); 
								echo '</nav>';
								
							endif;
						endforeach;
					?>
				</div> <!-- /#footer-links -->
				
				<div class="partners" style="display:none">
					<p>Partners with </p>
					<ul>
						<li><a href="http://www.bbc.co.uk/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAAZCAYAAACo79dmAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2hpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDowNTgwMTE3NDA3MjA2ODExODA4M0MyOEZDNzQ3RDZGNiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyQzYwMDk3QUJDREUxMUUzODUyQUE0QzUwMEUwMkJEMiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyQzYwMDk3OUJDREUxMUUzODUyQUE0QzUwMEUwMkJEMiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDU4MDExNzQwNzIwNjgxMTgwODNDMjhGQzc0N0Q2RjYiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDU4MDExNzQwNzIwNjgxMTgwODNDMjhGQzc0N0Q2RjYiLz4gPC9yZGY6RGVzY3Jp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"></a></li>
						<li style="display:none"><a href="http://www.bloomberg.com/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAAAZCAYAAACM9limAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2hpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDowNTgwMTE3NDA3MjA2ODExODA4M0MyOEZDNzQ3RDZGNiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyQzYwMDk3NkJDREUxMUUzODUyQUE0QzUwMEUwMkJEMiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpEMUMzNEFBNkJDREMxMUUzODUyQUE0QzUwMEUwMkJEMiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDU4MDExNzQwNzIwNjgxMTgwODNDMjhGQzc0N0Q2RjYiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDU4MDExNzQwNzIwNjgxMTgwODNDMjhGQzc0N0Q2RjYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7gWFvmAAADo0lEQVR42uyYWUhUYRTHZ0bLPdesJAiyzaCVIiyyBakMy3wIWiEqiSCQqMcinywofDAqFJQIxDIKMm0xiSyXygjJGI3J0LTIBSVMM1tu/1P/C6fr2OP44D3w437f+dZ7vnPOd2echmE4bBkpLtsEtmFsw9iGsQ3je/EHGSAchAIn6AfPwBP2iQO54CXIHqN9XgCTwV7wzRcLOo3R7+urYCeYAVpBE5g/RoYx9ziJB+eTUBpkeQlIABuBB+wAs0Ab29+PoWe38tnvy1AKYrmBz2ZQCWaDif8ZuwHMBT3gljKwKWLUZOAHHoNG6sPACoami17ZCUrYvod9HtFLHZxjmKGezvCW8bWWNSUd7APRoIpziMSAxaCGXidzXAN9YClIBAPgMpgD4h2IpD7jrxwBh0A2dbkSZSCO7Q9YDwe1xr/SDzaxXThljJTzbJvOehv4qdoLwV3LmOUc0wi+gk+W9ny1ZoqXNc32Vay/Vm2iy7D0/wAGDA56Z3iXNLbPZL2U9TrWc0Ai2K/GOKkzX3w9WA3qqUvnHKYc5QabWe9i/+Osl7N/FestYC1YBzzUJQM/liuUoQ5TtwhEqDXPgVQ6gUgHD3UleEid28HTNi24DKwB16lLVS+SB0JYrlQbcKhFtrKfSKylj8GTj2S5TrWdpi7J0t/NchPrer5Y5RVp6vBy6O0FylODWS5W40uom2eZtxcM6hxTo2K1ijdBJiijbljlnFZLbL/icxqvfpEuLzdLjFqvV7WFqDXMnCLyg89ALzmuS91UU1heAJKYO+UCKQJu7kvkjRo/dZRLZQhEutTiYdyQbP4sdW41IJbJSvofYNIyN5bHcim4z3KOGnuMifMK+EhdgJcPzSB1KYj84rODzyw1xpy/GpSzfBtEMAlvo2Euce9mcjblBp/SJ5jlTBrR4zBGF0lE0SCKdQ9dbbMl6Zpyke0TQAN1w+KWLLezLUrlC9N9b1K3hfVA1gdY71PrDHFekW7mD4cK4bcqD4oEMM+IFKk1XaDay3t/kXf1y8r6cwiN/F6R6/EpyOcX8Wd6RABDqp4ueo/uHcpr/iQ4o05Zxn/nSckcBWA3r/Rwy3zmmE6evBlikexTw1CroMckcJ5iztnD/mUM8YVcV7znIGinJ/qzT7MK7ULQwnaxwXawSz4HnOP8j6okfmM51PdON3g+ng2TAu6ofCNenMp64ng2TDxDzfw9KPICnJALxGn/52v/H2MbxjaMbRjfy28BBgCkWn68a0x1cwAAAABJRU5ErkJggg=="></a></li>
						<li style="display:none"><a href="http://edition.cnn.com/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAZCAYAAABzVH1EAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2hpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDowNTgwMTE3NDA3MjA2ODExODA4M0MyOEZDNzQ3RDZGNiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyQzYwMDk3RUJDREUxMUUzODUyQUE0QzUwMEUwMkJEMiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyQzYwMDk3REJDREUxMUUzODUyQUE0QzUwMEUwMkJEMiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDU4MDExNzQwNzIwNjgxMTgwODNDMjhGQzc0N0Q2RjYiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDU4MDExNzQwNzIwNjgxMTgwODNDMjhGQzc0N0Q2RjYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7nSZxPAAAD70lEQVR42uyYaUgVURTH32vRLCvTsM2kD21Ulll+EqIgooIKWkElyBbbzcrEqLAiKiMq21GjKNsoEqIw6IOVSBCVpRFmoaGILZoimpX6+l/4T5wuM/MWv4R04MedO3PmvDlzzz3nzHO6XC5HV5Buji4iPbzUHwSGgiDtJbwCX3k8GYwA1eCZG3t9wHTaKgJ1Jjp+IAZ0B+9AbxAGvoHnf7RUaLkhDOwCT8BPl7mMpW6edj4fhFjYXQBqhW4j2GyiN1zopIFcHpdJPXdOJINWl3sJBCkW18pN7Ibb2Fpj8iIN2QTO8vip1LMLrcsgXsyzwWuGgYET/ATDQTr1KkEqmMf7R4LjYIuwtVocnwMPQRYYAM6DPPDZCBrQztDq4LGSNk/2yHHhRCHYywdS8TwR9KcTimZQC5oYv5lgNLjPWFb3JIGT4ANtDuWoXswLMAGsB9d4/iKY29nNHsMfVvIAbAeH3RgO4OYbxHks8AcJoIDnroNoHrdybGTiSOc9ajUSwRy+gAKuhE+OZHL8xJW4CiJEdroH3nPJVXj9AG/59pX05FuO4327wX4wFSwCt8XD+fN+JUd4fT4YwtBWIVvPlffKkVEgSoTXbOHEMbDVJi0HmtSnDDADLGFIXqAjVSa6wxjO2/jywrhKVz2pd7rCHI6/QA1YyfljGyeM0JLiFOfTuPmV9OPDVVnY2ci9dofzM9w/5d46Mo7jSy77MM4PdqLoLgADwQnOT4kXZCaHwFHuo/4MMa9bFD+OtfxxQyo62UEc5WavYIqdZqM7HsziSiqJZMh75YiRm/syoxgS6KMDRs4P5Sqk2ujKurCHUVHoa9NYxnEKY7WZ87U+OnKTNUHJKj7sJQvdDqbhFs730SGfHMkXmzKA4WA8RJyNnY8W510sdG0i/k8zpRrXZVirTLmB82kMs72+OPKGNcFYBdU+fOf8CrgFFoJJzCYRHGMt7I/h/es5VxV/GVOs7oiDXbNawQbhuKpbpVqoevQ9kiza8QTWgWqeMwpaMShhi1FCJ2Vt0n8wiy24g07UMP4jNd1wjstFm7+DKOll5YyZI6otyeXxOhpVBe2AWC2HmzBrN7G/TEuxikdsOnW5y0ZSyWJmOlVbQoR+d0+axnjeNJthMZPOZTHeAxgWTm0/qGvBorDKD6ViVvYErvYKsFMrtB2a43WibUrk82aYPrub75FMk++FSlAKXptQounGafZ6ghZxvU7TD9X0k8S1ZlAv5pnefFgpokCOZsQTybawFw0aTPRTLPRzTHTVl2Ww1HN68S9KP5Gthti0103szYpsbA1mUolkrbpBrGQpE00QM5jaX1/+au7+/x30j8lvAQYANwSCZfI5RVUAAAAASUVORK5CYII="></a></li>
					</ul>
				</div>
				
			</div>
		</footer>
	
<?php get_template_part( 'parts/foot' ); ?>