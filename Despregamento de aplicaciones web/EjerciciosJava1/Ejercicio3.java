import java.util.Scanner;
public class Ejercicio3 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.print("Ingrese el valor de la variable 1: ");
        int var1 = sc.nextInt();

        System.out.print("Ingrese el valor de la variable 2: ");
        int var2 = sc.nextInt();

        System.out.print("Ingrese el valor de la variable 3: ");
        int var3 = sc.nextInt();

        int mayor = var1;

        if (var2 > mayor) {
            mayor = var2;
        }

        if (var3 > mayor) {
            mayor = var3;
        }

        int menor = var1;

        if (var2 < menor) {
            menor = var2;
        }

        if (var3 < menor) {
            menor = var3;
        }

        int medio = var1 + var2 + var3 - mayor - menor;

        System.out.println("Variables en orden descendente: " + mayor + ", " + medio + ", " + menor);
    }
}
