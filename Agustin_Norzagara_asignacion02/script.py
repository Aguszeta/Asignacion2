import cgi
import json

def es_primo(n):
    if n < 2:
        return False
    for i in range(2, int(n**0.5) + 1):
        if n % i == 0:
            return False
    return True

def es_bisiesto(year):
    return (year % 4 == 0 and year % 100 != 0) or (year % 400 == 0)

data = json.loads(cgi.FieldStorage().value)
start_year = data['inicioAño']
end_year = data['finAño']

years = []
for year in range(start_year, end_year + 1):
    css_class = ""
    if es_bisiesto(year) and es_primo(year):
        css_class = "leap-prime-year"
    elif es_bisiesto(year):
        css_class = "leap-year"
    elif es_primo(year):
        css_class = "prime-year"
    
    years.append(f'<span class="{css_class}">{year}</span>')

print("Content-Type: text/html\n")
print("<br>".join(years))
