import poll.sql.*;

public class ControlNumberGenerator {
    public static void main(String[] args) {
        String newControlNumber = generateControlNumber();
        System.out.println("New control number generated: " + newControlNumber);
    }

    public static String generateControlNumber() {
        String yearMonth = java.time.YearMonth.now().toString();
        String lastControlNumber = getLastControlNumber();

        if (lastControlNumber != null) {
            int lastSequence = Integer.parseInt(lastControlNumber.substring(lastControlNumber.length() - 4));
            int newSequence = lastSequence + 1;
            return yearMonth + "-" + String.format("%04d", newSequence);
        } else {
            return yearMonth + "-0001";
        }
    }

    public static String getLastControlNumber() {
        Connection conn = null;
        Statement stmt = null;
        String lastControlNumber = null;

        try {
            conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/database_name", "username", "password");
            stmt = conn.createStatement();
            String sql = "SELECT control_number FROM control_numbers ORDER BY id DESC LIMIT 1";
            ResultSet rs = stmt.executeQuery(sql);

            if (rs.next()) {
                lastControlNumber = rs.getString("control_number");
            }
        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            try {
                if (stmt != null) stmt.close();
                if (conn != null) conn.close();
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }

        return lastControlNumber;
    }
}

public static void insertControlNumber(String controlNumber) {
    Connection conn = null;
    Statement stmt = null;

    try {
        conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/database_name", "username", "password");
        stmt = conn.createStatement();
        String sql = "INSERT INTO poll (control_number) VALUES ('" + controlNumber + "')";
        stmt.executeUpdate(sql);
        System.out.println("Control number inserted successfully.");
    } catch (SQLException e) {
        e.printStackTrace();
    } finally {
        try {
            if (stmt != null) stmt.close();
            if (conn != null) conn.close();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
}
