import java.util.Scanner;

public class Ejercicio4 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.print("Ingrese el valor de la variable 1: ");
        int var1 = sc.nextInt();

        System.out.print("Ingrese el valor de la variable 2: ");
        int var2 = sc.nextInt();

        System.out.print("Ingrese el valor de la variable 3: ");
        int var3 = sc.nextInt();

        for (int i = 0; i < var3; i++) {
            var1 += var2;
        }

        System.out.println("El valor de la variable 1 después del bucle es: " + var1);
    }
}
